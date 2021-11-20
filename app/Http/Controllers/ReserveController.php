<?php

namespace App\Http\Controllers;

use App\Flight;
use App\Reserve;
use App\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReserveController extends Controller
{
    public function index()
    {
        // $reserves = Reserve::all();
        $passengers = Passenger::all();
        $flights = Flight::all();
        $reserves = Reserve::limit(5)->get(); // Apenas para testes

        return view('reserves.index', compact('reserves'), [
            'passengers' => $passengers,
            'flights' => $flights,
        ]);
    }

    public function store(Request $request)
    {
        // TODO: Tratativa dos inputs
        try {
            DB::beginTransaction();

            Reserve::create($request->all());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', 'Erro na adição de uma Reserva: '.$e->getMessage());
        }

        return redirect()->route('reserves.index')->with('success', 'Reserva adicionada com sucesso!');
    }

    public function create()
    {
        $passengers = Passenger::all();
        $flights = Flight::all();

        return view('reserves.create', [
            'passengers' => $passengers,
            'flights' => $flights,
        ]);
    }

    // show e edit
    public function getReserve($id)
    {
        if(!$reserve = Reserve::find($id)) {
            return response()->json('Esta reserva não existe! Tente recarregar a página.', 404);
        }

        return response()->json($reserve, 200);
    }

    public function update(Request $request, $id)
    {
        if(!$reserve = Reserve::find($id)) {
            return response()->json('Esta reserva não existe! Tente recarregar a página.', 404);
        }

        // TODO: Tratativa dos inputs
        try {
            DB::beginTransaction();

            $reserve->update($request->all());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json("Erro na edição da Reserva {$id}: ".$e->getMessage(), 500);
        }

        return response()->json(['message' => 'Reserva atualizada com sucesso', 'reserve' => $reserve], 200);
    }

    public function destroy($id)
    {
        if(!$reserve = Reserve::find($id)) {
            return response()->json('Esta reserva não existe! Tente recarregar a página.', 404);
        }

        try {
            DB::beginTransaction();

            $reserve->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json("Erro na exclusão da Reserva {$id}: ".$e->getMessage(), 500);
        }

        return response()->json('Reserva excluida com sucesso!', 200);
    }

    public function filter($min, $max)
    {
        if(!is_numeric($min)) {
            return response()->json('Código mínimo inválido! Digite apenas números.', 400);
        }

        if($max == 'Infinity') {
            $reserves = Reserve::where('CD_PSGR', '>', $min)->get();
        } else {
            if(!is_numeric($max)) {
                return response()->json('Código máximo inválido! Digite apenas números.', 400);
            }

            $reserves = Reserve::whereBetween('CD_PSGR', [$min, $max])->get();
        }

        foreach($reserves as $key => $reserve) {
            $reserves[$key] = $reserve->only(['NR_VOO', 'DT_SAIDA_VOO', 'CD_PSGR']);
        }

        return response()->json($reserves, 200);
    }
}
