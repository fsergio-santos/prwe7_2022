<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EditoraService;

class EditoraController extends Controller {
    
     private $editoraService;

     public function __construct(EditoraService $editoraService){
          $this->editoraService = $editoraService;   
     }

     public function index(){
        $dados = $this->editoraService->index();
        return view('editora.index',[
           'dados'=>$dados['dados']
        ]);
    } 

     
     public function create(){

     }
     
     public function store(){

     }


     public function show(){

     }



}
