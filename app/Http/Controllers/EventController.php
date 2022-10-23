<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = "Matheus";

        $idade = 29;
    
        $arr = [10,20,30,40,50];
    
        $nomes = ["Matheus","Pedro", "João","Lucas"];
         
        return view('welcome',
         ['nome' => $nome, 
        'idade' => $idade, 
        'profissao' => 'Programador',
        'arr' => $arr,
        'nomes' => $nomes
        ]);
    }

    public function create() {
        return view('events.create');
    }

    public function contact(){
        return view('contact');
    }

    public function produtos() {
        return view('produtos');
    }

    public function product(){
        $busca = request('search');
        return view('product',['busca' => $busca]);
    }

    public function products(){
        $id = null;
        return view('products',['id' => $id]);
    }
}
