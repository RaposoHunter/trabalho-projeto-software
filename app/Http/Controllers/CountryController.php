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
            return back()->with('error', 'Este país não existe! Tente recarregar a página.');
        }

        $input = $request->except('_token');
        $input['CD_PAIS'] = strtoupper($input['CD_PAIS']);
        $input['NM_PAIS'] = strtoupper($input['NM_PAIS']);

        try {
            DB::beginTransaction();

            if($country->airlines->count() > 0 && $request->segment(2) != $input['CD_PAIS']) {
                return back()->with('warning', "{$country->airships->count()} c. aéreas são deste país. Apague-as antes de alterar o país.");
            }

            if($country->airports->count() > 0 && $request->segment(2) != $input['CD_PAIS']) {
                return back()->with('warning', "{$country->airports->count()} aeroportos são deste país. Apague-os antes de alterar o país.");
            }

            if($country->passengers->count() > 0 && $request->segment(2) != $input['CD_PAIS']) {
                return back()->with('warning', "{$country->passengers->count()} passageiros são deste país. Apague-os antes de alterar o país.");
            }

            $country->update($input);

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', "Erro na edição do País {$id}! Tente novamente mais tarde");
        }

        return redirect()->route('countries.index')->with('success', 'País atualizado com sucesso');
    }

    public function destroy($id)
    {
        if(!$country = Country::find($id)) {
            return back()->with('error', 'Este país não existe! Tente recarregar a página.');
        }

        try {
            DB::beginTransaction();

            $errors = [];

            if($country->airlines->count() > 0) {
                $errors[] = "{$country->airlines->count()} c. aéreas são deste país. Apague-as antes de alterar o país.";
            }

            if($country->airports->count() > 0) {
                $errors[] = "{$country->airports->count()} aeroportos são deste país. Apague-os antes de alterar o país.";
            }

            if($country->passengers->count() > 0) {
                $errors[] = "{$country->passengers->count()} passageiros são deste país. Apague-os antes de alterar o país.";
            }

            if(count($errors) > 0) {
                return back()->with('warning', implode(' | ', $errors));
            }

            $country->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            dd($e->getMessage());

            return back()->with('error', "Erro na exclusão do País {$id}! Tente novamente mais tarde");
        }

        return redirect()->route('countries.index')->with('success', 'País excluido com sucesso!');
    }
}
