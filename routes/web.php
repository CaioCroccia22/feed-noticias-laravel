<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



// Route::get('/', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);


Route::get('/{id}', function ($id) {
    echo "materia: ".$id;
});



