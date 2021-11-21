<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CountryFormRequest;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();

        return view('countries.index', compact('countries'));
    }

    public function store(CountryFormRequest $request)
    {
        $input = $request->except('_token');
        $input['CD_PAIS'] = strtoupper($input['CD_PAIS']);
        $input['NM_PAIS'] = strtoupper($input['NM_PAIS']);

        try {
            DB::beginTransaction();

            Country::create($input);

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', 'Erro na adição de um País. Tente novamente mais tarde!');
        }

        return redirect()->route('countries.index')->with('success', 'País adicionado com sucesso!');
    }

    public function create()
    {
        return view('countries.create');
    }

    // show e edit
    public function getCountry($id)
    {
        if(!$country = Country::find($id)) {
            return response()->json('Este país não existe! Tente recarregar a página.', 404);
        }

        return response()->json($country, 200);
    }

    public function update(CountryFormRequest $request, $id)
    {
        if(!$country = Country::find($id)) {
            return response()->json('Este país não existe! Tente recarregar a página.', 404);
        }

        $input = $request->except('_token');
        $input['CD_PAIS'] = strtoupper($input['CD_PAIS']);
        $input['NM_PAIS'] = strtoupper($input['NM_PAIS']);

        try {
            DB::beginTransaction();

            $country->update($input);

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
