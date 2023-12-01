<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Libro;
use App\Http\Controllers\Area;
use App\Http\Controllers\Libreria;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/danielpatiño/libros', [Libro::class, 'index'])->name('libros');
Route::get('/danielpatiño/areas', [Area::class, 'index'])->name('areas');
Route::get('/danielpatiño/presentacion', [Libreria::class, 'index'])->name('libreria');


