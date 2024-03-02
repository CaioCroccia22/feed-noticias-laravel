<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Controllers\HomeController;

class MateriaController extends Controller
{
    public function index(Request $request){

        $dados = $request->all();
        echo "Materia: ".$dados['descricao'];
        return view('materia');
    }
}
