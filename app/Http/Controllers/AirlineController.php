<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AirlineController extends Controller
{
    public function index()
    {
        $airlines = Airline::all();

        return view('airlines.index', compact('airlines'));
    }

    public function store(Request $request)
    {
        // TODO: Tratativa dos inputs
        try {
            DB::beginTransaction();

            Airline::create($request->all());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json('Erro na adição de uma Companhia Aérea: '.$e->getMessage(), 500);
        }

        return response()->json('Companhia aérea adicionada com sucesso', 200);
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

    public function update(Request $request, $id)
    {
        if(!$airline = Airline::find($id)) {
            return response()->json('Esta companhia aérea não existe! Tente recarregar a página.', 404);
        }
        
        // TODO: Tratativa dos inputs
        try {
            DB::beginTransaction();

            $airline->update($request->all());

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
}
