<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MateriasController;


Route::get('/', function(){
    return response()-> json([
        'sucess' => true
    ]);
});

Route::get('/materias', [MateriasController::class,'index']);