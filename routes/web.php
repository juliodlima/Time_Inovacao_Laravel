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

Route::get('/', ['as'=>'site.home','uses'=>'Site\HomeController@index']);

Route::get('/login', ['as'=>'site.login','uses'=>'Site\LoginController@index']);
Route::get('/login/sair', ['as'=>'site.login.sair','uses'=>'Site\LoginController@sair']);
Route::post('/login/entrar', ['as'=>'site.login.entrar','uses'=>'Site\LoginController@entrar']);

// sistema de controle de login
Route::group(['middleware' => ['auth']], function () {
    // pessoas
    Route::get('/admin/pessoas', ['as'=>'admin.pessoas','uses'=>'Admin\PessoaController@index']);
    Route::get('/admin/pessoas/adicionar', ['as'=>'admin.pessoas.adicionar','uses'=>'Admin\PessoaController@adicionar']);
    Route::post('/admin/pessoas/salvar', ['as'=>'admin.pessoas.salvar','uses'=>'Admin\PessoaController@salvar']);
    Route::get('/admin/pessoas/editar/{id}', ['as'=>'admin.pessoas.editar','uses'=>'Admin\PessoaController@editar']);
    Route::put('/admin/pessoas/atualizar/{id}', ['as'=>'admin.pessoas.atualizar','uses'=>'Admin\PessoaController@atualizar']);
    Route::get('/admin/pessoas/deletar/{id}', ['as'=>'admin.pessoas.deletar','uses'=>'Admin\PessoaController@deletar']);

    // competencias
    Route::get('/admin/competencias', ['as'=>'admin.competencias','uses'=>'Admin\CompetenciaController@index']);
    Route::get('/admin/competencias/adicionar', ['as'=>'admin.competencias.adicionar','uses'=>'Admin\CompetenciaController@adicionar']);
    Route::post('/admin/competencias/salvar', ['as'=>'admin.competencias.salvar','uses'=>'Admin\CompetenciaController@salvar']);
    Route::get('/admin/competencias/editar/{id}', ['as'=>'admin.competencias.editar','uses'=>'Admin\CompetenciaController@editar']);
    Route::put('/admin/competencias/atualizar/{id}', ['as'=>'admin.competencias.atualizar','uses'=>'Admin\CompetenciaController@atualizar']);
    Route::get('/admin/competencias/deletar/{id}', ['as'=>'admin.competencias.deletar','uses'=>'Admin\CompetenciaController@deletar']);
});
