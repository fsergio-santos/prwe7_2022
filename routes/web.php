<?php

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

Route::get('/editora/listar',[EditoraController::class,'index']);
Route::get('/editora/incluir',[EditoraController::class,'new']);
Route::get('/editora/alterar',[EditoraController::class,'show']);
Route::get('/editora/cancelar',[EditoraController::class,'cancelar']);

Route::post('/editora/salvar',[EditoraController::class,'cancelar']);