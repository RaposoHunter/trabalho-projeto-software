<?php

namespace App\Http\Controllers;

use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StateFormRequest;

class StateController extends Controller
{
    public function index()
    {
        $states = State::all();

        return view('states.index', compact('states'));
    }

    public function store(StateFormRequest $request)
    {
        $input = $request->except('_token');
        $input['SG_UF'] = strtoupper($input['SG_UF']);
        $input['NM_UF'] = strtoupper($input['NM_UF']);

        try {
            DB::beginTransaction();

            State::create($input);

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', 'Erro na adição de um estado. Tente novamente mais tarde!');
        }
        return redirect()->route('states.index')->with('success', 'Estado adicionado com sucesso!');

    }

    public function create()
    {
        return view('states.create');
    }

    // show e edit
    public function getState($id)
    {
        if(!$state = State::find($id)) {
            return response()->json('Este estado não existe! Tente recarregar a página.', 404);
        }

        return response()->json($state, 200);
    }

    public function update(StateFormRequest $request, $id)
    {
        if(!$state = State::find($id)) {
            return response()->json('Este estado não existe! Tente recarregar a página.', 404);
        }

        $input = $request->except('_token');
        $input['SG_UF'] = strtoupper($input['SG_UF']);
        $input['NM_UF'] = strtoupper($input['NM_UF']);

        try {
            DB::beginTransaction();

            $state->update($inpu);

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
