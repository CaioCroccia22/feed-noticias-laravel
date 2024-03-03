<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MateriaController;




Route::get('/home', function(){
    return view('home');
});





