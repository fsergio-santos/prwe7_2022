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
            <form action="" method="POST">
               @include('editora.__form')
            </form>
        </div>

    </div>



@endsection