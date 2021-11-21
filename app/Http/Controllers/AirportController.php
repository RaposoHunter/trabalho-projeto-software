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

        return view('airports.index', compact('airports'));
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
            return response()->json('Este aeroporto não existe! Tente recarregar a página.', 404);
        }

        $input = $request->except('_token');
        $input['CD_ARPT'] = strtoupper($input['CD_ARPT']);
        $input['NM_CIDD'] = strtoupper($input['NM_CIDD']);

        try {
            DB::beginTransaction();

            $airport->update($input);

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json("Erro na edição do Aeroporto {$id}: ".$e->getMessage(), 500);
        }

        return response()->json(['message' => 'Aeroporto atualizado com sucesso', 'airport' => $airport], 200);
    }

    public function destroy($id)
    {
        if(!$airport = Airport::find($id)) {
            return response()->json('Este aeroporto não existe! Tente recarregar a página.', 404);
        }

        try {
            DB::beginTransaction();

            $airport->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json("Erro na exclusão do Aeroporto {$id}: ".$e->getMessage(), 500);
        }

        return response()->json('Aeroporto excluido com sucesso!', 200);
    }
}
