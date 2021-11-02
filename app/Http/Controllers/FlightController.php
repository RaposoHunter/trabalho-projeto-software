<?php

namespace App\Http\Controllers;

use App\Flight;
use App\Airship;
use App\FlightRoute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlightController extends Controller
{
    public function index()
    {
        $flights = Flight::all();

        return view('flights.index', compact('flights'));
    }

    public function store(Request $request)
    {
        // TODO: Tratativa dos inputs
        try {
            DB::beginTransaction();

            Flight::create($request->all());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json('Erro na adição de um Vôo: '.$e->getMessage(), 500);
        }

        return response()->json('Vôo adicionado com sucesso', 200);
    }

    public function create()
    {
        $airships = Airship::all();
        $flight_routes = FlightRoute::all();

        return view('flights.create', [
            'airships' => $airships,
            'flight_routes' => $flight_routes,
        ]);
    }

    // show e edit
    public function getFlight($id)
    {
        if(!$flight = Flight::find($id)) {
            return response()->json('Este vôo não existe! Tente recarregar a página.', 404);
        }

        return response()->json($flight, 200);
    }

    public function update(Request $request, $id)
    {
        if(!$flight = Flight::find($id)) {
            return response()->json('Este vôo não existe! Tente recarregar a página.', 404);
        }
        
        // TODO: Tratativa dos inputs
        try {
            DB::beginTransaction();

            $flight->update($request->all());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json("Erro na edição do Vôo {$id}: ".$e->getMessage(), 500);
        }

        return response()->json(['message' => 'Vôo atualizado com sucesso', 'flight' => $flight], 200);
    }

    public function destroy($id)
    {
        if(!$flight = Flight::find($id)) {
            return response()->json('Este vôo não existe! Tente recarregar a página.', 404);
        }

        try {
            DB::beginTransaction();

            $flight->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json("Erro na exclusão do Vôo {$id}: ".$e->getMessage(), 500);
        }

        return response()->json('Vôo excluido com sucesso!', 200);
    }
}
