<?php

namespace App\Http\Controllers\Api;

use App\Models\Materia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
class MateriasController extends Controller 
{
    public function index()
    {
        $materias = Materia::paginate(10); 
        return response()->json($materias);
    }

    public function show(Materia $materia)
    {
        return response()->json($materia);
    }
}