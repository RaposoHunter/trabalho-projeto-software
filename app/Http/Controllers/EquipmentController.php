<?php

namespace App\Http\Controllers;

use App\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\EquipmentFormRequest;

class EquipmentController extends Controller
{
    /*
     * Explicação geral dos controllers e métodos em AirlineController.php
     **/

    // Controller responsável por gerir as requisições referentes à Equipamentos
    
    public function index()
    {
        $equipments = Equipment::all();

        return view('equipments.index', compact('equipments'));
    }

    public function store(EquipmentFormRequest $request)
    {
        $input = $request->except('_token');
        $input['CD_EQPT'] = strtoupper($input['CD_EQPT']);
        $input['NM_EQPT'] = strtoupper($input['NM_EQPT']);
        $input['DC_TIPO_EQPT'] = strtoupper($input['DC_TIPO_EQPT']);
        
        try {
            DB::beginTransaction();

            Equipment::create($input);

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

    public function update(EquipmentFormRequest $request, $id)
    {
        if(!$equipment = Equipment::find($id)) {
            return back()->with('success', 'Este equipamento não existe! Tente recarregar a página.');
        }

        $input = $request->except('_token');
        $input['CD_EQPT'] = strtoupper($input['CD_EQPT']);
        $input['NM_EQPT'] = strtoupper($input['NM_EQPT']);
        $input['DC_TIPO_EQPT'] = strtoupper($input['DC_TIPO_EQPT']);

        try {
            DB::beginTransaction();

            if($equipment->airships->count() > 0 && $request->segment(2) != $input['CD_EQPT']) {
                return back()->with('warning', "{$equipment->airships->count()} aeronaves usam este equipamento. Apague-as antes de alterar o equipamento.");
            }

            $equipment->update($input);

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();
            
            return back()->with('error', "Erro na edição do Equipamento {$id}! Tente novamente mais tarde");
        }

        return redirect()->route('equipments.index')->with('success', 'Equipamento atualizado com sucesso');
    }

    public function destroy($id)
    {
        if(!$equipment = Equipment::find($id)) {
            return back()->with('error', 'Este equipamento não existe! Tente recarregar a página.');
        }

        try {
            DB::beginTransaction();

            if($equipment->airships->count() > 0) {
                return back()->with('warning', "{$equipment->airships->count()} aeronaves usam este equipamento. Apague-as antes de alterar o equipamento.");
            }

            $equipment->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', "Erro na exclusão do Equipamento {$id}! Tente novamente mais tarde");
        }

        return redirect()->route('equipments.index')->with('success', 'Equipamento excluido com sucesso!', 200);
    }

    // Filtro responsável por listar equipamentos pela capacidade máxima de passageiros e tipo do eqpt
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

    // Filtro responsável por listar equipamentos pelo tipo e por uma string que esteja no nome
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
