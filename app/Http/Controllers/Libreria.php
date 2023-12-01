<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Libreria extends Controller
{
    public function index()
    {
        return view('presentacion');
    }
}
