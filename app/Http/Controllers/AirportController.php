<?php

namespace App\Http\Controllers;

use App\State;
use App\Airport;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AirportFormRequest;

class AirportController extends Controller
{
    public function index()
    {
        $airports = Airport::all();
        $countries = Country::all();
        $states = State::all();

        return view('airports.index', compact('airports'), [
            'countries' => $countries,
            'states' => $states,
        ]);
    }

    public function store(AirportFormRequest $request)
    {
        $input = $request->except('_token');
        $input['CD_ARPT'] = strtoupper($input['CD_ARPT']);
        $input['NM_CIDD'] = strtoupper($input['NM_CIDD']);

        try {
            DB::beginTransaction();

            Airport::create($input);

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', 'Erro na adição de um Aeroporto. Tente novamente mais tarde!');
        }

        return redirect()->route('airports.index')->with('success', 'Aeroporto adicionado com sucesso!');
    }

    public function create()
    {
        $countries = Country::all();
        $states = State::all();

        return view('airports.create', [
            'countries' => $countries,
            'states' => $states,
        ]);
    }

    // show e edit
    public function getAirport($id)
    {
        if(!$airport = Airport::find($id)) {
            return response()->json('Este aeroporto não existe! Tente recarregar a página.', 404);
        }

        return response()->json($airport, 200);
    }

    public function update(AirportFormRequest $request, $id)
    {
        if(!$airport = Airport::find($id)) {
            return back()->with('error', 'Este aeroporto não existe! Tente recarregar a página.');
        }

        $input = $request->except('_token');
        $input['CD_ARPT'] = strtoupper($input['CD_ARPT']);
        $input['NM_CIDD'] = strtoupper($input['NM_CIDD']);

        try {
            DB::beginTransaction();

            if($airport->getFlightRoutes()->count() > 0 && $request->segment(2) != $input['CD_ARPT']) {
                return back()->with('warning', "{$airport->getFlightRoutes()->count()} rotas utilizam este aeroporto. Apague-as antes de alterar o aeroporto.");
            }
            
            $airport->update($input);

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', "Erro na edição do Aeroporto {$id}! Tente novamente mais tarde.");
        }

        return redirect()->route('airports.index')->with('success', 'Aeroporto atualizado com sucesso');
    }

    public function destroy($id)
    {
        if(!$airport = Airport::find($id)) {
            return back()->with('error', 'Este aeroporto não existe! Tente recarregar a página.');
        }

        try {
            DB::beginTransaction();

            if($airport->getFlightRoutes()->count() > 0) {
                return back()->with('warning', "{$airport->getFlightRoutes()->count()} rotas utilizam este aeroporto. Apague-as antes de apagar o aeroporto.");
            }

            $airport->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', "Erro na exclusão do Aeroporto {$id}! Tente novamente mais tarde");
        }

        return redirect()->route('airports.index')->with('success', 'Aeroporto excluido com sucesso!');
    }
}
