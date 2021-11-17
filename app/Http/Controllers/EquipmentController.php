<?php

namespace App\Http\Controllers;

use App\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipments = Equipment::all();

        return view('equipments.index', compact('equipments'));
    }

    public function store(Request $request)
    {
        // TODO: Tratativa dos inputs
        try {
            DB::beginTransaction();

            Equipment::create($request->all());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', 'Erro na adição de um Equipamento: '.$e->getMessage());
        }

        return redirect()->route('equipments.index')->with('success', 'Equipamento adicionado com sucesso!');
    }

    public function create()
    {
        return view('equipments.create');
    }

    // show e edit
    public function getEquipment($id)
    {
        if(!$equipment = Equipment::find($id)) {
            return response()->json('Este equipamento não existe! Tente recarregar a página.', 404);
        }

        return response()->json($equipment, 200);
    }

    public function update(Request $request, $id)
    {
        if(!$equipment = Equipment::find($id)) {
            return response()->json('Este equipamento não existe! Tente recarregar a página.', 404);
        }

        // TODO: Tratativa dos inputs
        try {
            DB::beginTransaction();

            $equipment->update($request->all());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json("Erro na edição do Equipamento {$id}: ".$e->getMessage(), 500);
        }

        return response()->json(['message' => 'Equipamento atualizado com sucesso', 'equipment' => $equipment], 200);
    }

    public function destroy($id)
    {
        if(!$equipment = Equipment::find($id)) {
            return response()->json('Este equipamento não existe! Tente recarregar a página.', 404);
        }

        try {
            DB::beginTransaction();

            $equipment->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            $message = $e->getCode() == 23000 ? "Existem {$equipment->airships->count()} aeronaves que utilizam este equipamento. Você deve apagá-las primeiro." : $e->getMessage();

            return response()->json("Erro na exclusão do Equipamento {$id}: ".$message, 500);
        }

        return response()->json('Equipamento excluido com sucesso!', 200);
    }

    public function filter1($psgrs, $type)
    {
        if(!is_numeric($psgrs) && $psgrs != 'Infinity') {
            return response()->json('Capacidade inválida. Digite apenas números', 400);
        }
        
        if(!in_array($type, ['HELICOPTERO', 'TURBO HELICE', 'JATO'])) {
            return response()->json('Tipo inválido.', 400);
        }

        if($psgrs == 'Infinity') {
            $equipments = Equipment::where('DC_TIPO_EQPT', '<>', $type)->get();
        } else {
            $equipments = Equipment::where('DC_TIPO_EQPT', '<>', $type)->where('QT_PSGR', '<=', $psgrs)->get();
        }

        return response()->json($equipments, 200);
    }

    public function filter2($name, $type)
    {
        if(!in_array($type, ['HELICOPTERO', 'TURBO HELICE', 'JATO'])) {
            return response()->json('Tipo inválido.', 400);
        }

        if($name == 'null') $name = '';

        $equipments = Equipment::where('DC_TIPO_EQPT', $type)->where('NM_EQPT', 'like', "%{$name}%")->get();

        return response()->json($equipments, 200);
    }
}
