<?php

namespace App\Http\Controllers;

use App\Airline;
use App\Airship;
use App\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AirshipController extends Controller
{
    public function index()
    {
        $airships = Airship::all();
        $airlines = Airline::all();
        $equipments = Equipment::all();

        return view('airships.index', compact('airships'), [
            'airlines' => $airlines,
            'equipments' => $equipments,
        ]);
    }

    public function store(Request $request)
    {
        // TODO: Tratativa dos inputs
        try {
            DB::beginTransaction();

            Airship::create($request->all());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', 'Erro na adição de uma Aeronave: '.$e->getMessage());
        }

        return redirect()->route('airlines.index')->with('success', 'Aeronave adicionada com sucesso!');
    }

    public function create()
    {
        $airlines = Airline::all();
        $equipments = Equipment::all();

        return view('airships.create', [
            'airlines' => $airlines,
            'equipments' => $equipments,
        ]);
    }

    // show e edit
    public function getAirship($id)
    {
        if(!$airship = Airship::find($id)) {
            return response()->json('Esta aeronave não existe! Tente recarregar a página.', 404);
        }

        return response()->json($airship, 200);
    }

    public function update(Request $request, $id)
    {
        if(!$airship = Airship::find($id)) {
            return response()->json('Esta aeronave não existe! Tente recarregar a página.', 404);
        }

        // TODO: Tratativa dos inputs
        try {
            DB::beginTransaction();

            $airship->update($request->all());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json("Erro na edição da Aeronave {$id}: ".$e->getMessage(), 500);
        }

        return response()->json(['message' => 'Aeronave atualizada com sucesso', 'airship' => $airship], 200);
    }

    public function destroy($id)
    {
        if(!$airship = Airship::find($id)) {
            return response()->json('Esta aeronave não existe! Tente recarregar a página.', 404);
        }

        try {
            DB::beginTransaction();

            $airship->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json("Erro na exclusão da Aeronave {$id}: ".$e->getMessage(), 500);
        }

        return response()->json('Aeronave excluida com sucesso!', 200);
    }
}
