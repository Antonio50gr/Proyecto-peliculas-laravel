<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\peliculas\PeliculaController;

Route::get('',[ HomeController::class, 'index'])->name('admin.home');

Route::resource('users',UserController::class)->names('admin.users');

Route::resource('peliculas',PeliculaController::class)->names('admin.peliculas');



