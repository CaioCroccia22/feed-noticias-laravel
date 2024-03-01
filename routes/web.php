<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MateriaController;



// Route::get('/', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);


Route::get('/{titulo}', [MateriaController::class, 'index']);


