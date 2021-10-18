<?php

namespace App\Http\Controllers;

use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StateController extends Controller
{
    public function index()
    {
        $states = State::all();

        return view('states', compact('states'));
    }

    public function store(Request $request)
    {
        // TODO: Tratativa dos inputs
        try {
            DB::beginTransaction();

            State::create($request->all());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json('Erro na adição de um estado: '.$e->getMessage(), 500);
        }

        return response()->json('Estado adicionado com sucesso', 200);
    }

    // show e edit
    public function getState($id)
    {
        if(!$state = State::find($id)) {
            return response()->json('Este estado não existe! Tente recarregar a página.', 404);
        }

        return response()->json($state, 200);
    }

    public function update(Request $request, $id)
    {
        if(!$state = State::find($id)) {
            return response()->json('Este estado não existe! Tente recarregar a página.', 404);
        }
        
        // TODO: Tratativa dos inputs
        try {
            DB::beginTransaction();

            $state->update($request->all());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json("Erro na edição do estado {$id}: ".$e->getMessage(), 500);
        }

        return response()->json(['message' => 'Estado atualizado com sucesso', 'state' => $state], 200);
    }

    public function destroy($id)
    {
        if(!$state = State::find($id)) {
            return response()->json('Este estado não existe! Tente recarregar a página.', 404);
        }

        try {
            DB::beginTransaction();

            $state->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json("Erro na exclusão do estado {$id}: ".$e->getMessage(), 500);
        }

        return response()->json('Estado excluido com sucesso!', 200);
    }
}
