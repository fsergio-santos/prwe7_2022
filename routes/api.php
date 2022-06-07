<?php

//header('Access-Control-Allow-Origin: http://localhost:3000');
//header('Access-Control-Allow-Headers: origin, x-requested-with, content-type');
//header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EditoraApiController;
use App\Http\Controllers\Api\RoleApiController;
use App\Http\Controllers\Api\UserApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware(['throttle:api'])->group(function () {

  

Route::prefix('editora')->group(function (){
    Route::get('/listar',[EditoraApiController::class,'buscaPaginada']);

    Route::get('/incluir',[EditoraApiController::class,'new']);
    Route::get('/alterar/{id}',[EditoraApiController::class,'show']);
    Route::get('/excluir/{id}',[EditoraApiController::class,'delete']);
    
    Route::post('/salvar',[EditoraApiController::class,'create']);
    Route::post('/alterar/{id}',[EditoraApiController::class,'store']);
    Route::post('/excluir/{id}',[EditoraApiController::class,'excluir']);
});

Route::prefix('roles')->group(function() {
    Route::get('/listar',[RoleApiController::class,'buscaPaginada']);

    Route::get('/incluir',[RoleApiController::class,'new']);
    Route::get('/alterar/{id}',[RoleApiController::class,'show']);
    Route::get('/excluir/{id}',[RoleApiController::class,'delete']);
    Route::get('/cancelar',[RoleApiController::class,'cancelar']);
    
    Route::post('/salvar',[RoleApiController::class,'create']);
    Route::post('/alterar/{id}',[RoleApiController::class,'store']);
    Route::post('/excluir/{id}',[RoleApiController::class,'excluir']);
});

Route::prefix('usuario')->group(function() {
    Route::get('/listar',[UserApiController::class,'buscaPaginada']);
    Route::get('/incluir',[UserApiController::class,'new']);
    Route::get('/alterar/{id}',[UserApiController::class,'show']);
    Route::get('/excluir/{id}',[UserApiController::class,'delete']);
    Route::get('/cancelar',[UserApiController::class,'cancelar']);
    
    Route::post('/salvar',[UserApiController::class,'create']);
    Route::post('/alterar/{id}',[UserApiController::class,'store']);
    Route::post('/excluir/{id}',[UserApiController::class,'excluir']);
});




//});

