<?php

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

Route::get('/', 'ProdutosController@index');
Route::match(['get','post'],'/produtos', 'ProdutosController@indexProd');
Route::get('/sobre', function(){
    return view('sobre');
});

//Rotas ADM
Route::get('adm', function(){
    return view('adm.login');
});
Route::match(['get', 'post'],'adm/home', 'ProdutosController@indexAdm')->middleware('RedirectIfAuthenticated');

//Rotas de Formulários
Route::post('/', 'ContatosController@enviarEmail');
Route::post('logar', 'UsuariosController@logar');
Route::post('salvar', 'ProdutosController@store');
Route::post('excluir','ProdutosController@destroy');

//Rotas Ajax
Route::get('listaProd/{orderBy}/{categoria}','ProdutosController@listaProd');
Route::get('editarProd/{id}','ProdutosController@edit');
