<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Api\MateriasController;

Route::get('/home', [HomeController::class, 'index']);
Route::get('/materias/{materia}', [MateriasController::class, 'show']);
