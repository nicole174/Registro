<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function access(Redirector $redirect)
    {
        $credenciales = request()->validate([
            'email' => ['required', 'email', 'string'], 
            'password' => ['required', 'string']
        ]);

        if(Auth::attempt($credenciales)){
            return $redirect->to('/formulario');
        }
        return back()->withErrors([
            'email' => 'El correo o la contraseña no son correctos.',
        ]);
    }

    public function salir(Request $request, Redirector $redirect){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return $redirect->to('/');
    }
}
