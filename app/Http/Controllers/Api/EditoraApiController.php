<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\EditoraService;
use App\Http\Controllers\Controller;

class EditoraApiController extends Controller {
    
     private $editoraService;

     public function __construct(EditoraService $editoraService){
          $this->editoraService = $editoraService;   
     }

     public function buscaPaginada(Request $request ){
          
         $page     = $request->get('page') ? $request->get('page') : 1;  
         $pageSize = $request->get('pageSize') ? $request->get('pageSize') : 5;
         $dir      = $request->get('dir') ? $request->get('dir') : 'asc';
         $props    = $request->get('props') ? $request->get('props') : 'id';
    
         $dados = $this->editoraService->buscaPaginada($page,$pageSize, $dir, $props);
         return response()->json($dados);
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
