<?php

namespace App\Http\Controllers;

use App\Airport;
use App\FlightRoute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlightRouteController extends Controller
{
    public function index()
    {
        $flight_routes = FlightRoute::all();
        $airports = Airport::all();

        return view('flight_routes.index', compact('flight_routes'), [
            'airports' => $airports,
        ]);
    }

    public function store(FlightRouteFormRequest $request)
    {
        // TODO: Tratativa dos inputs
        try {
            DB::beginTransaction();

            FlightRoute::create($request->all());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', 'Erro na adição de uma Rota de Vôo: '.$e->getMessage());
        }
        return redirect()->route('flightroutes.index')->with('success', 'Rota de Vôo adicionada com sucesso!');
    }

    public function create()
    {
        $airports = Airport::all();

        return view('flight_routes.create', [
            'airports' => $airports,
        ]);
    }

    // show e edit
    public function getFlightRoute($id)
    {
        if(!$flight_route = FlightRoute::find($id)) {
            return response()->json('Esta rota de vôo não existe! Tente recarregar a página.', 404);
        }

        return response()->json($flight_route, 200);
    }

    public function update(FlightRouteFormRequest $request, $id)
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

    public function filter($type)
    {
        if(!in_array($type, ['null', 'reserva', 'passagem', 'todas'])) {
            return response()->json('Tipo inválido!', 400);
        }

        switch($type) {
            case 'null':
            case 'todas':
                $flight_routes = FlightRoute::all();
            break;

            case 'reserva':
                $flight_routes = FlightRoute::getNotReserved();
            break;

            case 'passagem':
                $flight_routes = FlightRoute::whereNull('VR_PASG')->get();
            break;
        }

        return response()->json($flight_routes, 200);
    }
}
