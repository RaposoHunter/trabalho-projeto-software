<?php

namespace App\Http\Controllers;

use App\Airline;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AirlineFormRequest;

class AirlineController extends Controller
{
    // Todos os Controllers seguem os mesmos princípios, salvo os que possuem a funcionalidade
    // de filtragem de dados. Nestes casos, os controllers possuem um ou dois métodos extras para
    // realizar as filtragens

    /* $this->index(): 
     *      Responsável por devolver a página inicial relativa ao grupo de rotas com alguns dados para a view
     * $this->store():
     *      Responsável por adicionar um registro novo, relativo à tabela específica, no banco de dados
     * $this->create():
     *      Responsável por devolver a página de cadastro relativa ao grupo de rotas com alguns dados para a view
     * $this->get<Model>():
     *      Responsável por retornar o model que se adeque à identificação enviada para o método, ou nulo caso não exista
     * $this->update():
     *      Responsável por atualizar um registro ou instanciar uma mensagem de erro caso seja alterada a chave primária do model
     * $this->destroy():
     *      Responsável por remover um registro ou instanciar uma mensagem de erro caso o registro seja referenciado por outros
    **/


    public function index()
    {
        // <Model>::all(): Retorna todos os registros do model específico

        $airlines = Airline::all();
        $countries = Country::all();

        // Retorna a view especificada enviando alguns dados
        return view('airlines.index', compact('airlines'), [
            'countries' => $countries,
        ]);
    }

    public function store(AirlineFormRequest $request)
    {
        // Captura todos os dados da request em forma de array
        $input = $request->all();
        $input['CD_CMPN_AEREA'] = strtoupper($input['CD_CMPN_AEREA']);
        $input['NM_CMPN_AEREA'] = strtoupper($input['NM_CMPN_AEREA']);

        try {
            // Inicia uma transação SQL
            DB::beginTransaction();

            // Adiciona um registro ao banco
            Airline::create($input);

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            // Volta à ultima URL com uma mensagem de erro
            return back()->with('error', 'Erro na adição de uma Companhia Aérea: '.$e->getMessage());
        }

        // Redireciona para a rota especificada com uma mensagem de sucesso
        return redirect()->route('airlines.index')->with('success', 'Companhia aérea cadastrada com sucesso!');
    }

    public function create()
    {
        $countries = Country::all();

        return view('airlines.create', [
            'countries' => $countries,
        ]);
    }

    // show e edit
    public function getAirline($id)
    {
        // Procura por um Model com o $id especificado
        if(!$airline = Airline::find($id)) {
            return response()->json('Esta companhia aérea não existe! Tente recarregar a página.', 404);
        }

        return response()->json($airline, 200);
    }

    public function update(AirlineFormRequest $request, $id)
    {
        if(!$airline = Airline::find($id)) {
            return back()->with('error', 'Esta companhia aérea não existe! Tente recarregar a página.');
        }

        $input = $request->all();
        $input['CD_CMPN_AEREA'] = strtoupper($input['CD_CMPN_AEREA']);
        $input['NM_CMPN_AEREA'] = strtoupper($input['NM_CMPN_AEREA']);

        try {
            DB::beginTransaction();

            // Avalia se o model é referenciado por algum outro registro e se a chave primária não foi alterada
            if($airline->airships->count() > 0 && $request->segment(2) != $input['CD_CMPN_AEREA']) {
                return back()->with('warning', "{$airline->airships->count()} aeronaves pertencem a esta c. aérea. Apague-as antes de alterar a companhia.");
            }

            // Atualiza o registro
            $airline->update($input);

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', "Erro na edição da uma Companhia Aérea {$id}: Tente novamente mais tarde");
        }

        return redirect()->route('airlines.index')->with('success', 'Companhia aérea atualizada com sucesso');
    }

    public function destroy($id)
    {
        if(!$airline = Airline::find($id)) {
            return back()->with('error', 'Esta companhia aérea não existe! Tente recarregar a página.', 404);
        }

        try {
            DB::beginTransaction();

            // Avalia se o model é referenciado por algum outro registro
            if($airline->airships->count() > 0) {
                return back()->with('warning', "{$airline->airships->count()} aeronaves pertencem a esta c. aérea. Apague-as antes de alterar a companhia.");
            }

            // Deleta o registro
            $airline->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', "Erro na exclusão da Companhia Aérea {$id}! Tente novamente mais tarde");
        }

        return redirect()->route('airlines.index')->with('success', 'Companhia aérea excluida com sucesso!');
    }

    /*
     * Retorna uma lista de companhias aéreas baseado no tipo informado ao método
    **/

    public function filter($type)
    {
        if($type == 'null') {
            return response()->json('Informe o Tipo de Companhia', 400);
        }

        // Avalia se o tipo enviado é válido
        if(!in_array($type, ['nacional', 'estrangeira', 'sem-pais', 'todas'])) {
            return response()->json('Informe um Tipo de Companhia válido', 400);
        }

        switch($type) {
            case 'nacional':
                // Companhias aéreas cujo código de país seja 'BR'
                $airlines = Airline::where('CD_PAIS', 'BR')->get();
            break;

            case 'estrangeira':
                // Companhias aéreas cujo código de país seja diferente de 'BR'
                $airlines = Airline::where('CD_PAIS', '<>', 'BR')->get();
            break;

            case 'sem-pais':
                // Companhias aéreas cujo código de país seja nulo
                $airlines = Airline::whereNull('CD_PAIS')->get();
            break;

            default:
                $airlines = Airline::all();
        }

        // Adiciona a cada companhia a capacidade máxima das aeronaves
        foreach($airlines as $key => $airline) {
            $airline->getPassengerCapacity();
            $airlines[$key] = $airline->only('NM_CMPN_AEREA', 'CD_PAIS', 'QT_TOTAL_PSGR');
        }

        return response()->json($airlines, 200);
    }
}
