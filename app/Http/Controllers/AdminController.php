<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index() {

        //$registros = Formulario::paginate(5);

        $registros = DB::table('formularios')
                ->orderByDesc('id')
                ->paginate(5);

        return view('admin.admin')->with(['registros'=>$registros]);
    }

    public function descarga($documento) {

        return response()->download(storage_path('app/public/'.$documento));
    }
}
