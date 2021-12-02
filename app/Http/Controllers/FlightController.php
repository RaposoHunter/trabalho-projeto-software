<?php

namespace App\Http\Controllers;

use App\Flight;
use App\Airport;
use App\Airship;
use App\FlightRoute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\FlightFormRequest;

class FlightController extends Controller
{
    public function index()
    {
        $flights = Flight::all();
        // $flights = Flight::limit(20)->get();
        $airships = Airship::all();
        $flight_routes = FlightRoute::all();

        return view('flights.index', compact('flights'), [
            'airships' => $airships,
            'flight_routes' => $flight_routes,
        ]);
    }

    public function store(FlightFormRequest $request)
    {
        $input = $request->except('_token');
        $input['DT_SAIDA_VOO'] = implode('-', array_reverse(explode('/', $input['DT_SAIDA_VOO'])));

        try {
            DB::beginTransaction();

            Flight::create($input);

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('success', 'Algo deu errado ao adicionar o voo. Tente novamente mais tarde!');
        }

        return redirect()->route('flights.index')->with('success', 'Vôo adicionado com sucesso!');
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

    public function update(FlightFormRequest $request, $id)
    {
        if(!$flight = Flight::find($id)) {
            return response()->json('Este vôo não existe! Tente recarregar a página.', 404);
        }

        $input = $request->except('_token');
        $input['DT_SAIDA_VOO'] = implode('-', array_reverse(explode('/', $input['DT_SAIDA_VOO'])));

        try {
            DB::beginTransaction();

            $flight->update($input);

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

    public function filter($from, $to)
    {
        $cities = Airport::getCities();
        $cities[] = 'null';

        $from = urldecode($from);
        $to = urldecode($to);

        if(!in_array($from, $cities) || !in_array($to, $cities)) {
            return response()->json('Cidade de origem ou destino inválido!', 400);
        }

        $flights = Flight::join('itr_rota_voo', 'itr_voo.NR_ROTA_VOO', 'itr_rota_voo.NR_ROTA_VOO')
                        ->leftJoin('itr_arpt as Origem', 'itr_rota_voo.CD_ARPT_ORIG', 'Origem.CD_ARPT')
                        ->leftJoin('itr_arpt as Destino', 'itr_rota_voo.CD_ARPT_DEST', 'Destino.CD_ARPT')
                        ->select('NR_VOO', 'itr_voo.NR_ROTA_VOO', 'VR_PASG', 'Origem.CD_ARPT as CD_ARPT_ORIG', 'Origem.NM_CIDD as NM_CIDD_ORIG', 'Destino.CD_ARPT as CD_ARPT_DEST', 'Destino.NM_CIDD as NM_CIDD_DEST')
        ;


        if($from != 'null') {
            $flights = $flights->where('Origem.NM_CIDD', $from);
        }

        if($to != 'null') {
            $flights = $flights->where('Destino.NM_CIDD', $to);
        }

        return response()->json($flights->get(), 200);
    }
}
