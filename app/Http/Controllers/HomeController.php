<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
        
    $titulo = "Acidente";
    $descricao = "Acidente na avenida";
    $imagem = "";
    $dt_publicacao = 12;

    $dados = [
        'titulo'=> $titulo,
        'descricao'=>$descricao,
        'imagem'=> $imagem,
        'dt_publicacao'=>$dt_publicacao

    ];

    return view('home', $dados);

    }
    
}
