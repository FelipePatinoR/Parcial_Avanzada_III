<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Area extends Controller
{
    public function index()
    {
        $areas = DB::table("AreaConocimiento")->get();
        return view('area', ['areas' => $areas]);
    }
}
