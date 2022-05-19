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
             'dados'=>$dados['dados'],
          ]);
       } 
  
             
       public function create(Request $request){
          $data = $request->all();
          $mensagem = $this->editoraService->create($data);  
          return response()->json($mensagem);
  
       }
       
       public function store(Request $request, $id){
            $data = $request->all();
            $mensagem = $this->editoraService->store($data, $id);
            return response()->json($mensagem);
  
       }
  
  
       public function show($id){
         
           $registro = $this->editoraService->show($id); 
           return response()->json($registro);
       }
  
       public function delete($id){
            $registro = $this->editoraService->delete($id); 
            return view('editora.excluir',[
                 'registro'=>$registro['registro'],
            ]);
        }
  
        public function excluir($id){
            $registro = $this->editoraService->excluir($id); 
            return redirect()->route('editora.listar');
        }
  
       
       public function cancelar(){
            return redirect()->route('editora.listar');
       }

}
