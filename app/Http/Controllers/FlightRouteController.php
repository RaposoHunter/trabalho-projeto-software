<?php

namespace App\Http\Controllers;

use App\Airport;
use App\FlightRoute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\FlightRouteFormRequest;

class FlightRouteController extends Controller
{
    /*
     * Explicação geral dos controllers e métodos em AirlineController.php
     **/

    // Controller responsável por gerir as requisições referentes à Rotas de Vôo

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
        $input = $request->all();

        if(!$flight_route = FlightRoute::find($id)) {
            return back()->with('error', 'Esta rota de vôo não existe! Tente recarregar a página.');
        }

        try {
            DB::beginTransaction();

            $flight_route->update($input);

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            dd($e->getMessage());

            return back()->with('error', "Erro na edição da Rota de Vôo {$id}! Tente novamente mais tarde");
        }

        return redirect()->route('flightroutes.index')->with('success', 'Rota de Vôo atualizada com sucesso');
    }

    public function destroy($id)
    {
        if(!$flight_route = FlightRoute::find($id)) {
            return back()->with('error', 'Esta rota de vôo não existe! Tente recarregar a página.');
        }

        try {
            DB::beginTransaction();

            if($flight_route->flights->count() > 0) {
                return back()->with('warning', "{$flight_route->flights->count()} voos utilizam esta rota. Apague-os antes de excluir a rota.");
            }

            $flight_route->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', "Erro na exclusão da Rota de Vôo {$id}! Tente novamente mais tarde");
        }

        return redirect()->route('flightroutes.index')->with('success', 'Rota de Vôo excluida com sucesso!');
    }

    // Filtro para listagem de rotas seguindo o critério escolhido
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
