<?php

namespace App\Http\Controllers;

use App\Country;
use App\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PassengerFormRequest;

class PassengerController extends Controller
{
    public function index()
    {
        $passengers = Passenger::all();
        $countries = Country::all();

        return view('passengers.index', [
            'passengers' => $passengers,
            'countries' => $countries,
        ]);
    }

    public function store(PassengerFormRequest $request)
    {
        $input = $request->except('_token');

        $input['NM_PSGR'] = strtoupper($input['NM_PSGR']);
        $input['DT_NASC_PSGR'] = implode('/', array_reverse(explode('/', $input['DT_NASC_PSGR'])));

        try {
            DB::beginTransaction();

            Passenger::create($input);

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', 'Erro na adição de um Passageiro: '.$e->getMessage());
        }
        return redirect()->route('passengers.index')->with('success', 'Passageiro adicionado com sucesso!');

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

    public function getPassenger($id)
    {
        if(!$passenger = Passenger::find($id)) {
            return response()->json('Este passageiro não existe! Tente recarregar a página.', 404);
        }

        return response()->json($passenger, 200);
    }

    public function update(PassengerFormRequest $request, $id)
    {
        if(!$passenger = Passenger::find($id)) {
            return back()->with('error', 'Este passageiro não existe! Tente recarregar a página.');
        }

        $input = $request->except('_token');
        
        $input['NM_PSGR'] = strtoupper($input['NM_PSGR']);
        $input['DT_NASC_PSGR'] = implode('/', array_reverse(explode('/', $input['DT_NASC_PSGR'])));

        try {
            DB::beginTransaction();

            $passenger->update($input);

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', "Erro na edição do Passageiro {$id}. Tente novamente mais tarde!");
        }

        return redirect()->route('passengers.index')->with('success', 'Passageiro atualizado com sucesso');
    }

    public function destroy($id)
    {
        if(!$passenger = Passenger::find($id)) {
            return back()->with('error', 'Este passageiro não existe. Tente recarregar a página!');
        }

        try {
            DB::beginTransaction();

            if($passenger->reserves->count() === 0) {
                $passenger->delete();
            } else {
                return back()->with('warning', "O passageiro possui {$passenger->reserves->count()} reservas cadastradas. Cancele-as antes de apagar o passageiro.");
            }

            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();

            return back()->with('error', "Erro na exclusão do Passageiro {$id}. Tente novamente mais tarde!");
        }

        return redirect()->route('passengers.index')->with('success', 'Passageiro excluido com sucesso!');
    }

    public function filter($civil, $sex)
    {
        if(!in_array($civil, ['null', 'C', 'S'])) {
            return response()->json('Estado Civil inválido!', 400);
        }

        if(!in_array($sex, ['null', 'M', 'F', 'O'])) {
            return response()->json('Sexo inválido!', 400);
        }

        $passengers = Passenger::select('NM_PSGR', 'DT_NASC_PSGR');

        if($civil != 'null') {
            $passengers = $passengers->where('IC_ESTD_CIVIL', $civil);
        }

        if($sex != 'null') {
            $passengers = $passengers->where('IC_SEXO_PSGR', $sex);
        }

        $passengers = $passengers->get();

        foreach($passengers as $passenger) {
            $passenger->getAge();
        }

        $avg_age = $passengers->avg('ID_PSGR');

        return response()->json(['passengers' => $passengers, 'avg_age' => $avg_age], 200);
    }
}
