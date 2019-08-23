<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/pessoas', ['as'=>'admin.pessoas','uses'=>'Admin\PessoaController@index']);
Route::get('/admin/pessoas/adicionar', ['as'=>'admin.pessoas.adicionar','uses'=>'Admin\PessoaController@adicionar']);
Route::post('/admin/pessoas/salvar', ['as'=>'admin.pessoas.salvar','uses'=>'Admin\PessoaController@salvar']);
Route::get('/admin/pessoas/editar/{id}', ['as'=>'admin.pessoas.editar','uses'=>'Admin\PessoaController@editar']);
Route::put('/admin/pessoas/atualizar/{id}', ['as'=>'admin.pessoas.atualizar','uses'=>'Admin\PessoaController@atualizar']);
Route::get('/admin/pessoas/deletar/{id}', ['as'=>'admin.pessoas.deletar','uses'=>'Admin\PessoaController@deletar']);