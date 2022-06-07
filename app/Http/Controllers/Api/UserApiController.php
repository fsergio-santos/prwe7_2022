<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Output\ConsoleOutput;
use App\Models\User;

class UserApiController extends Controller {
    
     private $service;

     public function __construct(UserService $userService, ConsoleOutput $out){
          $this->service = $userService;   
          $this->out = $out;
     }

     public function buscaPaginada( Request $request ){
          
         $page     = $request->get('page') ? $request->get('page') : 1;  
         $pageSize = $request->get('pageSize') ? $request->get('pageSize') : 5;
         $dir      = $request->get('dir') ? $request->get('dir') : 'asc';
         $props    = $request->get('props') ? $request->get('props') : 'id';
         $search   = $request->get('nome') ? $request->get('nome') : ""; 
  

         $dados = $this->service->buscaPaginada($page,$pageSize, $dir, $props, $search);
         return response()->json($dados);
     } 
  
             
       public function create(Request $request){
          $data = $request->json()->all();
          $roles = $data['roles'];
          $mensagem = $this->service->create($data, $roles);
          return response()->json($mensagem);
  
       }
       
       public function store(Request $request, $id){
            $data = $request->all();
            $mensagem = $this->service->store($data, $id);
            return response()->json($mensagem);
       }
  
  
       public function show($id){
           $registro = $this->service->show($id); 
           return response()->json($registro);
       }
  
       public function delete($id){
            $registro = $this->service->delete($id); 
            return response()->json($registro);
        }
  
        public function excluir($id){
            $registro = $this->service->excluir($id); 
            return response()->json("registro excluído com sucesso!");
        }
  
       
       

}
