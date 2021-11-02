<?php

namespace App\Http\Controllers;

use App\Country;
use App\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PassengerController extends Controller
{
    public function index()
    {
        $passengers = Passenger::all();

        return view('passengers.index', compact('passengers'));
    }

    public function store(Request $request)
    {
        // TODO: Tratativa dos inputs
        try {
            DB::beginTransaction();

            Passenger::create($request->all());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json('Erro na adição de um Passageiro: '.$e->getMessage(), 500);
        }

        return response()->json('Passageiro adicionado com sucesso', 200);
    }

    public function create()
    {
        $passengers = Passenger::all();
        $countries = Country::all();

        return view('passengers.create', [
            'passengers' => $passengers,
            'countries' => $countries,
        ]);
    }

    // show e edit
    public function getPassenger($id)
    {
        if(!$passenger = Passenger::find($id)) {
            return response()->json('Este passageiro não existe! Tente recarregar a página.', 404);
        }

        return response()->json($passenger, 200);
    }

    public function update(Request $request, $id)
    {
        if(!$passenger = Passenger::find($id)) {
            return response()->json('Este passageiro não existe! Tente recarregar a página.', 404);
        }
        
        // TODO: Tratativa dos inputs
        try {
            DB::beginTransaction();

            $passenger->update($request->all());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json("Erro na edição do Passageiro {$id}: ".$e->getMessage(), 500);
        }

        return response()->json(['message' => 'Passageiro atualizado com sucesso', 'passenger' => $passenger], 200);
    }

    public function destroy($id)
    {
        if(!$passenger = Passenger::find($id)) {
            return response()->json('Este passageiro não existe! Tente recarregar a página.', 404);
        }

        try {
            DB::beginTransaction();

            $passenger->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json("Erro na exclusão do Passageiro {$id}: ".$e->getMessage(), 500);
        }

        return response()->json('Passageiro excluido com sucesso!', 200);
    }
}
