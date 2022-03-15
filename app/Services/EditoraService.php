<?php

namespace App\Services;

use App\Models\Editora;

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

    
    public function create(){

    }
    
    public function store(){

    }


    public function show(){
        
    }


}