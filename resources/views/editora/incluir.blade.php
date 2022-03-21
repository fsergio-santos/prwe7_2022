@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="app-title">
            <h1>
                <i class="fa fa-edit">Cadastro de Editora</i>
            </h1>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-search fa-lg"></i></li>
                <li class="breadcrumb-item">Pesquisa</li>
            </ul>
        </div>
    <div>
    <div class="tile">
        <div class="tile-body">
            <form action="{{ url(/editora/salvar)}}" method="POST">
               @include('editora.__form')
               <div class="center">
                   <button type="submit" class="btn btn-primary btn-lg">Salvar Dados da Editora</button>
                   <a class="btn btn-secondary btn-lg" href="{{ url('/editora/cancelar')}}">Cancelar Cadastro da Editora</a>
               </div>
            </form>
        </div>

    </div>



@endsection