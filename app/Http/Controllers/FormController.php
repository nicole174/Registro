<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('formulario.formulario');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'age' => 'required',
            'escolaridad' => 'required',
            'experiencia' => 'required',
            'tipo_experiencia',
            'vacante' => 'required',
            
        ]);

        $datos = new Formulario();

        $datos->name = $request->get('name');
        $datos->phone = $request->get('phone');
        $datos->age = $request->get('age');
        $datos->escolaridad = $request->get('escolaridad');
        $datos->experiencia = $request->get('experiencia');
        $datos->tipo_experiencia = $request->get('tipo_experiencia');
        $datos->vacante = $request->get('vacante');

        $datos->id_user = auth()->user()->id;
        
        $datos->save();

        return redirect()->to('/formulario');
    }
}
