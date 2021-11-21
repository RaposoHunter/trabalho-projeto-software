<?php

namespace App\Http\Controllers;

use App\Airline;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AirlineFormRequest;

class AirlineController extends Controller
{
    public function index()
    {
        $airlines = Airline::all();

        return view('airlines.index', compact('airlines'));
    }

    public function store(AirlineFormRequest $request)
    {
        $input = $request->all();
        $input['CD_CMPN_AEREA'] = strtoupper($input['CD_CMPN_AEREA']);
        $input['NM_CMPN_AEREA'] = strtoupper($input['NM_CMPN_AEREA']);

        try {
            DB::beginTransaction();

            Airline::create($input);

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', 'Erro na adição de uma Companhia Aérea: '.$e->getMessage());
        }

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
        if(!$airline = Airline::find($id)) {
            return response()->json('Esta companhia aérea não existe! Tente recarregar a página.', 404);
        }

        return response()->json($airline, 200);
    }

    public function update(AirlineFormRequest $request, $id)
    {
        if(!$airline = Airline::find($id)) {
            return response()->json('Esta companhia aérea não existe! Tente recarregar a página.', 404);
        }

        $input = $request->all();
        $input['CD_CMPN_AEREA'] = strtoupper($input['CD_CMPN_AEREA']);
        $input['NM_CMPN_AEREA'] = strtoupper($input['NM_CMPN_AEREA']);

        try {
            DB::beginTransaction();

            $airline->update($input);

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json("Erro na edição da uma Companhia Aérea {$id}: ".$e->getMessage(), 500);
        }

        return response()->json(['message' => 'Companhia aérea atualizada com sucesso', 'airline' => $airline], 200);
    }

    public function destroy($id)
    {
        if(!$airline = Airline::find($id)) {
            return response()->json('Esta companhia aérea não existe! Tente recarregar a página.', 404);
        }

        try {
            DB::beginTransaction();

            $airline->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json("Erro na exclusão da Companhia Aérea {$id}: ".$e->getMessage(), 500);
        }

        return response()->json('Companhia aérea excluida com sucesso!', 200);
    }

    public function filter($type)
    {
        if($type == 'null') {
            return response()->json('Informe o Tipo de Companhia', 400);
        }
        
        if(!in_array($type, ['nacional', 'estrangeira', 'sem-pais', 'todas'])) {
            return response()->json('Informe um Tipo de Companhia válido', 400);
        }

        switch($type) {
            case 'nacional':
                $airlines = Airline::where('CD_PAIS', 'BR')->get();
            break;

            case 'estrangeira':
                $airlines = Airline::where('CD_PAIS', '<>', 'BR')->get();
            break;

            case 'sem-pais':
                $airlines = Airline::whereNull('CD_PAIS', )->get();
            break;

            default:
                $airlines = Airline::all();
        }

        foreach($airlines as $key => $airline) {
            $airline->getPassengerCapacity();
            $airlines[$key] = $airline->only('NM_CMPN_AEREA', 'CD_PAIS', 'QT_TOTAL_PSGR');
        }

        return response()->json($airlines, 200);
    }
}
