
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MateriasController;

Route::get('/materias', [MateriasController::class, 'index']);
Route::get('/', function(){
    return response()->json([
        'sucess' => true
    ]);
});