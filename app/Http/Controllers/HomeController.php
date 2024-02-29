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
        'descrição'=>$descricao,
        'imagem'=> $imagem,
        'data de publicação'=>$dt_publicacao

    ];

    return view('home', $dados);

    }
    
}
