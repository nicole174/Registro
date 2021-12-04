<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('registro.registro');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required | email | unique:users',
            'password' => 'required | confirmed',
            'password_confirmation' => 'required',
        ]);

        $usuarios = new User();

        $usuarios->name = $request->get('name');
        $usuarios->email = $request->get('email');
        $usuarios->password = Hash::make($request->password);

        $usuarios->save();

        return redirect()->to('/')->with('status', 'Registro exitoso. Ya puedes iniciar sesión.');
    }
}
