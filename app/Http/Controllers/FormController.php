<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'cv' => 'required|mimes:pdf,docx|max:2048',
            
        ]);

        /* try{
            DB::beginTransaction(); */

            $datos = new Formulario();

            $datos->name = $request->get('name');
            $datos->phone = $request->get('phone');
            $datos->age = $request->get('age');
            $datos->escolaridad = $request->get('escolaridad');
            $datos->experiencia = $request->get('experiencia');
            $datos->tipo_experiencia = $request->get('tipo_experiencia');
            $datos->vacante = $request->get('vacante');

            $datos->id_user = auth()->user()->id;

            $name = $request->file('cv')->getClientOriginalName();
 
            $path = $request->file('cv')->store('public/files');

    
            $datos->document_name = $name;
            $datos->path = $path;


            $datos->save();
            /* DB::commit();  
        } catch(Exception $e) {
            return redirect()->to('/formulario')->with('form', 'Tu formulario no estaba completo.');
        } */

        return redirect()->to('/formulario')->with('form', 'Se ha enviado correctamente tu Formulario.');
    }
}
