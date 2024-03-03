<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Materias;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redis;



class MateriasController extends Controller
{
    public function index()
    {
        return Materias::all();
    }
}
