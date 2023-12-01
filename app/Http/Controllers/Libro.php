<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Libro extends Controller
{
    public function index()
    {
        $libro = DB::table("libro")
        ->join('AreaConocimiento', 'area', '=', 'idArea')->select('libro.*', 'areaconocimiento.descripcion as area')->get()
        ; 
        return view('libro', ['libros' => $libro]);
    }
}
