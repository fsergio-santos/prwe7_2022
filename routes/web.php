<?php

////header('Access-Control-Allow-Origin: http://localhost:3000');
//header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization');
//header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditoraController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/editora/listar',[EditoraController::class,'index'])->name('editora.listar');
Route::get('/editora/incluir',[EditoraController::class,'new']);
Route::get('/editora/alterar/{id}',[EditoraController::class,'show']);
Route::get('/editora/excluir/{id}',[EditoraController::class,'delete']);
Route::get('/editora/cancelar',[EditoraController::class,'cancelar']);

Route::post('/editora/salvar',[EditoraController::class,'create']);
Route::post('/editora/alterar/{id}',[EditoraController::class,'store']);
Route::post('/editora/excluir/{id}',[EditoraController::class,'excluir']);