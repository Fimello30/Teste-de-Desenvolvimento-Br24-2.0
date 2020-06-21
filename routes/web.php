<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro', function () {
    return view('cadastro.index');
});
Route::post('/cadastro',['uses'=>'CadastroController@index']);

Route::get('/cadastro-realizado', function () {
    return view('cadastro.realizado');
})->name('cadastro-realizado');

Route::get('/cadastro-atualizado', function () {
    return view('cadastro.atualizado');
})->name('cadastro-atualizado');

Route::get('/contato',['uses'=>'ListaContatoController@index']);

Route::get('/companhia',['uses'=>'ListaCompanhiaController@index']);
