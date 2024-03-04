<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MateriaResource;
use App\Models\Materia;
use Illuminate\Http\Request;


class MateriasController extends Controller
{
    public function index(){

        $materias = Materia::all();

        return MateriaResource::collection($materias);
    }
}