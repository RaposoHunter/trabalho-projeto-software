<?php

namespace App\Http\Controllers;

use App\FlightRoute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlightRouteController extends Controller
{
    public function index()
    {
        $flight_routes = FlightRoute::all();

        return view('flight_routes', compact('flight_routes'));
    }

    public function store(Request $request)
    {
        // TODO: Tratativa dos inputs
        try {
            DB::beginTransaction();

            FlightRoute::create($request->all());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json('Erro na adição de uma Rota de Vôo: '.$e->getMessage(), 500);
        }

        return response()->json('Rota de Vôo adicionada com sucesso', 200);
    }

    // show e edit
    public function getFlightRoute($id)
    {
        if(!$flight_route = FlightRoute::find($id)) {
            return response()->json('Esta rota de vôo não existe! Tente recarregar a página.', 404);
        }

        return response()->json($flight_route, 200);
    }

    public function update(Request $request, $id)
    {
        if(!$flight_route = FlightRoute::find($id)) {
            return response()->json('Esta rota de vôo não existe! Tente recarregar a página.', 404);
        }
        
        // TODO: Tratativa dos inputs
        try {
            DB::beginTransaction();

            $flight_route->update($request->all());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json("Erro na edição da Rota de Vôo {$id}: ".$e->getMessage(), 500);
        }

        return response()->json(['message' => 'Rota de Vôo atualizada com sucesso', 'flight_route' => $flight_route], 200);
    }

    public function destroy($id)
    {
        if(!$flight_route = FlightRoute::find($id)) {
            return response()->json('Esta rota de vôo não existe! Tente recarregar a página.', 404);
        }

        try {
            DB::beginTransaction();

            $flight_route->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json("Erro na exclusão da Rota de Vôo {$id}: ".$e->getMessage(), 500);
        }

        return response()->json('Rota de Vôo excluida com sucesso!', 200);
    }
}
