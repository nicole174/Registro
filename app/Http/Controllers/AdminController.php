<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

        $registros = Formulario::all();

        return view('admin.admin')->with(['registros'=>$registros]);
    }

    public function descarga($documento) {

        return response()->download(storage_path('app/public/'.$documento));
    }
}
