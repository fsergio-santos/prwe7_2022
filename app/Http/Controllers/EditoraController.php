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

     public function new(){
          return view('editora.incluir');
     }



     
     public function create(Request $request){
        $data = $request->all();
        $mensagem = $this->editora_service->create($data);  
        return([
             'success'=>$mensagem['success'],
             view('editora.index'),
        ]);

     }
     
     public function store(){

     }


     public function show(){
         return view('editora.alterar');
     }

     
     public function cancelar(){
          $dados = $this->editoraService->index();
          return view('editora.index',[
             'dados'=>$dados['dados']
          ]);
     }

}
