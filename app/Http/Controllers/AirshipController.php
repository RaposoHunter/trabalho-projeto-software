<?php

namespace App\Http\Controllers;

use App\Airline;
use App\Airship;
use App\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AirshipFormRequest;

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

    public function store(AirshipFormRequest $request)
    {   
        $input = $request->except('_token');
        $input['CD_ARNV'] = strtoupper($input['CD_ARNV']);

        try {
            DB::beginTransaction();

            Airship::create($input);

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', 'Erro na adição de uma Aeronave: '.$e->getMessage());
        }

        return redirect()->route('airships.index')->with('success', 'Aeronave adicionada com sucesso!');
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

    public function update(AirshipFormRequest $request, $id)
    {
        if(!$airship = Airship::find($id)) {
            return back()->with('error', 'Esta aeronave não existe! Tente recarregar a página.');
        }

        try {
            DB::beginTransaction();

            if($airship->flights->count() > 0 && $request->segment(2) != $request->CD_ARNV) {
                return back()->with('warning', "{$airship->flights->count()} voos utilizam esta aeronave. Apague-os antes de alterar a aeronave.");
            }

            $airship->update($request->all());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', "Erro na edição da Aeronave {$id}! Tente novamente mais tarde");
        }

        return redirect()->route('airships.index')->with('success', 'Aeronave atualizada com sucesso');
    }

    public function destroy($id)
    {
        if(!$airship = Airship::find($id)) {
            return back()->with('error', 'Esta aeronave não existe! Tente recarregar a página.');
        }

        try {
            DB::beginTransaction();

            if($airship->flights->count() > 0) {
                return back()->with('warning', "{$airship->flights->count()} voos utilizam esta aeronave. Apague-os antes de alterar a aeronave.");
            }

            $airship->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', "Erro na exclusão da Aeronave {$id}! Tente novamente mais tarde");
        }

        return redirect()->route('airships.index')->with('success', 'Aeronave excluida com sucesso!');
    }
}
