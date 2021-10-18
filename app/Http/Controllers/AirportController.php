<?php

namespace App\Http\Controllers;

use App\Airport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AirportController extends Controller
{
    public function index()
    {
        $airports = Airport::all();

        return view('airports', compact('airports'));
    }

    public function store(Request $request)
    {
        // TODO: Tratativa dos inputs
        try {
            DB::beginTransaction();

            Airport::create($request->all());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json('Erro na adição de um Aeroporto: '.$e->getMessage(), 500);
        }

        return response()->json('Aeroporto adicionado com sucesso', 200);
    }

    // show e edit
    public function getAirport($id)
    {
        if(!$airport = Airport::find($id)) {
            return response()->json('Este aeroporto não existe! Tente recarregar a página.', 404);
        }

        return response()->json($airport, 200);
    }

    public function update(Request $request, $id)
    {
        if(!$airport = Airport::find($id)) {
            return response()->json('Este aeroporto não existe! Tente recarregar a página.', 404);
        }
        
        // TODO: Tratativa dos inputs
        try {
            DB::beginTransaction();

            $airport->update($request->all());

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
