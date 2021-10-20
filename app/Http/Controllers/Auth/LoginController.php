<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    { 
        $credentials = $request->only('email', 'password');
        $remember_token = isset($request->remember_token);
        
        if (Auth::attempt($credentials, $remember_token)) {
            return redirect()->intended('/');
        } else {
            return back()->with('form', 'login')->withErrors(['email' => 'Credenciais Inválidas']);
        }
    }

    public function login() {
        if(auth()->user()) {
            return back();
        }

        return view('auth.login');
    }

    public function logout() {
        if(!auth()->user()) {
            return redirect()->route('login');
        }

        Auth::logout();

        return redirect()->route('login');
    }

    public function register(Request $request)
    {
        if(auth()->user()) {
            return back();
        }

        $credentials = $request->only('email', 'name', 'password');
        
        if($request->confirm_password !== $credentials['password']) {
            return redirect()->route('login')->with('form', 'register')->withErrors(['password' => 'As senhas não batem', 'confirm_password' => 'As senhas não batem']);
        }
        
        $input = $credentials;
        $input['password'] = bcrypt($credentials['password']);

        try {
            DB::beginTransaction();

            $user = User::create($input);
            $user->assign('atendente');
            
            Auth::attempt($credentials);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }

        return redirect()->route('index');
    }
}
