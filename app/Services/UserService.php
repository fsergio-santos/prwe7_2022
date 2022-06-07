<?php

namespace App\Services;

use App\Models\User;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Output\ConsoleOutput;

class UserService {

    private $repository;

    public function __construct(User $user, ConsoleOutput $out){
        $this->repository = $user;
        $this->out = $out;
    }

    public function index(){
       $dados = $this->repository->paginate(5);
       return ([
           'dados'=>$dados,
       ]);
    } 

    public function buscaPaginada($page, $pageSize, $dir, $props, $search ){
        //$this->out->write($search);
        if (empty($search)){
            $query = DB::table('users')->select('*')->orderBy($props,$dir);
        } else {
            $query = DB::table('users')->where($props, 'LIKE','%'.$search.'%')->orderBy($props,$dir);
        }
        $total = $query->count();
        
        $registros = $query->offset(($page-1) * $pageSize)->limit($pageSize)->get();

        return ([
            'registros'=>$registros,
            'currentPage'=>$page,
            'pageSize'=>$pageSize,
            'lastPage'=>ceil($total/$pageSize)
        ]);

    }

    public function create($data, $roles){
        $usuario = $this->repository->create($data);
        for($i=0; $i<sizeof($roles); $i++){
            $role = Role::find($roles[$i]);
            $usuario->roles()->attach($role);
        }
        return([
            'success'=> 'Registro cadastrado sucesso!'
        ]);

    }
    
    public function store($data, $id){
        $registro = $this->repository->find($id);
        $registro->update($data);
        return([
            'success'=> 'Registro alterado com sucesso!'
        ]);   
    }

    public function show($id){
        $registro = $this->repository->find($id);
        return ([
            'registro'=>$registro,
        ]);
    }

    public function delete($id){
        $registro = $this->repository->find($id);
        return ([
            'registro'=>$registro,
        ]);
    }

    public function excluir($id){
        $registro = $this->repository->find($id);
        $registro->delete();
    }


}