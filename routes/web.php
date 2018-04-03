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
//configuracao inicial
Route::get('/configuracaoInicial',function(){
	return view('configInicial.configInicial');
});
Route::get('/primeiroScann',function(){
	return view('configInicial.primeiroScann');
});

//login
Route::get('/',function(){
	return view('login');
})->middleware('PrimeiroAcesso');//verifica se é o primeiro acesso

//indicadores
Route::get('/dashboard','HostsController@indicadores')->middleware('RedirectIfAuthenticated');

//usuarios
Route::get('/usuarios','UsuariosController@index')->middleware('RedirectIfAuthenticated');

//hosts
Route::get('/rede','HostsController@index')->middleware('RedirectIfAuthenticated');
Route::get('/scanner',function(){
	return view('scanner');
})->middleware('RedirectIfAuthenticated');
Route::post('/scanner/{modo}','HostsController@scanner')->middleware('RedirectIfAuthenticated');

//configuracoes
Route::get('/configuracoes','ConfiguracaosController@index')->middleware('RedirectIfAuthenticated');
Route::post('/salvarConfig','ConfiguracaosController@store');

//bugs
Route::get('/bug',function(){
	return view('bug');
})->middleware('RedirectIfAuthenticated');


