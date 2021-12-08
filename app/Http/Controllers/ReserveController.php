<?php

namespace App\Http\Controllers;

use App\Flight;
use App\Reserve;
use App\Passenger;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ReserveFormRequest;

class ReserveController extends Controller
{
    /*
     * Explicação geral dos controllers e métodos em AirlineController.php
     **/

    // Controller responsável por gerir as requisições referentes à Reservas

    public function index()
    {
        $reserves = Reserve::all();
        $passengers = Passenger::all();
        $flights = Flight::all();

        return view('reserves.index', compact('reserves'), [
            'passengers' => $passengers,
            'flights' => $flights,
        ]);
    }

    public function store(ReserveFormRequest $request)
    {
        $input = $request->all();
        $input['DT_SAIDA_VOO'] = implode('-', array_reverse(explode('/', $input['DT_SAIDA_VOO'])));

        try {
            DB::beginTransaction();

            Reserve::create($input);

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', 'Erro na adição de uma Reserva. Tente novamente mais tarde!');
        }

        return redirect()->route('reserves.index')->with('success', 'Reserva adicionada com sucesso!');
    }

    public function create()
    {
        $passengers = Passenger::all();
        $flights = Flight::select('NR_VOO')->distinct()->get();

        return view('reserves.create', [
            'passengers' => $passengers,
            'flights' => $flights,
        ]);
    }

    // show e edit
    public function getReserve($id)
    {
        // Quebra a string usando Regex
        $id = preg_split('/[ND]/', $id);

        if(!$reserve = Reserve::where('CD_PSGR', $id[0])->where('NR_VOO', $id[1])->where('DT_SAIDA_VOO', $id[2])->first()) {
            return response()->json('Esta reserva não existe! Tente recarregar a página.', 404);
        }

        return response()->json($reserve, 200);
    }

    public function update(ReserveFormRequest $request, $id)
    {
        $id = preg_split('/[ND]/', $id);
        $date = Carbon::parse($id[2])->format('d/m/Y');

        if(!$reserve = Reserve::where('CD_PSGR', $id[0])->where('NR_VOO', $id[1])->where('DT_SAIDA_VOO', $id[2])->first()) {
            return back()->with('error', 'Esta reserva não existe! Tente recarregar a página.');
        }

        $input = $request->except('_token', '_method');
        $input['DT_SAIDA_VOO'] = implode('-', array_reverse(explode('/', $input['DT_SAIDA_VOO'])));

        try {
            DB::beginTransaction();

            DB::table('itr_resv')->where('CD_PSGR', $id[0])->where('NR_VOO', $id[1])->where('DT_SAIDA_VOO', $id[2])->update($input);

            DB::commit();
        } catch(\Exception $e) {
            dd($e->getMessage());
            DB::rollback();

            return back()->with('error', "Erro na edição da Reserva do passageiro {$id[0]} no Voo {$id[1]} no dia {$date}! Tente novamente mais tarde");
        }

        return redirect()->route('reserves.index')->with('success', 'Reserva atualizada com sucesso');
    }

    public function destroy($id)
    {
        $id = preg_split('/[ND]/', $id);
        $date = Carbon::parse($id[2])->format('d/m/Y');

        if(!$reserve = Reserve::where('CD_PSGR', $id[0])->where('NR_VOO', $id[1])->where('DT_SAIDA_VOO', $id[2])->first()) {
            return back()->with('error', 'Esta reserva não existe! Tente recarregar a página.');
        }

        try {
            DB::beginTransaction();

            DB::table('itr_resv')->where('CD_PSGR', $id[0])->where('NR_VOO', $id[1])->where('DT_SAIDA_VOO', $id[2])->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', "Erro na edição da Reserva do passageiro {$id[0]} no Voo {$id[1]} no dia {$date}! Tente novamente mais tarde");
        }

        return redirect()->route('reserves.index')->with('success', 'Reserva excluida com sucesso!');
    }


    // Filtro responsável por listar as reservas dos passageiros cujos códigos estejam dentro do intervalo enviado
    public function filter($min, $max)
    {
        if(!is_numeric($min)) {
            return response()->json('Código mínimo inválido! Digite apenas números.', 400);
        }

        if($max == 'Infinity') {
            $reserves = Reserve::where('CD_PSGR', '>', $min)->get();
        } else {
            if(!is_numeric($max)) {
                return response()->json('Código máximo inválido! Digite apenas números.', 400);
            }

            $reserves = Reserve::whereBetween('CD_PSGR', [$min, $max])->get();
        }

        foreach($reserves as $key => $reserve) {
            $reserves[$key] = $reserve->only(['NR_VOO', 'DT_SAIDA_VOO', 'CD_PSGR']);
        }

        return response()->json($reserves, 200);
    }
}
