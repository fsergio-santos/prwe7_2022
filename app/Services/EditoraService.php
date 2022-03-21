<?php

namespace App\Services;

use App\Models\Editora;
use Carbon\Carbon;

class EditoraService {

    private $repository;

    public function __construct(Editora $editora){
        $this->repository = $editora;
    }

    public function index(){
       $dados = $this->repository->all();
       return ([
           'dados'=>$dados,
       ]);
    } 

    public function create($data){
        
        $data['data_cadastro'] = Carbon::createFromFormat('d/m/Y',$data['data_cadastro'])->format('Y-m-d');

        $this->repository->create($data);
        
        return([
            'success'=> 'Registro cadastrado sucesso!'
        ]);

    }
    
    public function store(){

    }


    public function show(){
        
    }


}