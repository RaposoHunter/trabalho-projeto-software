<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();

        return view('countries', compact('countries'));
    }

    public function store(Request $request)
    {
        // TODO: Tratativa dos inputs
        try {
            DB::beginTransaction();

            Country::create($request->all());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json('Erro na adição de um País: '.$e->getMessage(), 500);
        }

        return response()->json('País adicionado com sucesso', 200);
    }

    // show e edit
    public function getCountry($id)
    {
        if(!$country = Country::find($id)) {
            return response()->json('Este país não existe! Tente recarregar a página.', 404);
        }

        return response()->json($country, 200);
    }

    public function update(Request $request, $id)
    {
        if(!$country = Country::find($id)) {
            return response()->json('Este país não existe! Tente recarregar a página.', 404);
        }
        
        // TODO: Tratativa dos inputs
        try {
            DB::beginTransaction();

            $country->update($request->all());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json("Erro na edição do País {$id}: ".$e->getMessage(), 500);
        }

        return response()->json(['message' => 'País atualizado com sucesso', 'country' => $country], 200);
    }

    public function destroy($id)
    {
        if(!$country = Country::find($id)) {
            return response()->json('Este país não existe! Tente recarregar a página.', 404);
        }

        try {
            DB::beginTransaction();

            $country->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return response()->json("Erro na exclusão do País {$id}: ".$e->getMessage(), 500);
        }

        return response()->json('País excluido com sucesso!', 200);
    }
}
