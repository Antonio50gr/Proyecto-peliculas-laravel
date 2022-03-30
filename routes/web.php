<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::Routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/peliculas', [\App\Http\Controllers\PeliculaController::class, 'index'])->name('peliculas.index');


//Route::resource("peliculas",\App\Http\Controllers\peliculas\PeliculaController::Class);

Route::middleware(['auth:sanctum','verified'])->get('/dashboard',function() {
    return view('dashboard');
})->name('dashboard');

