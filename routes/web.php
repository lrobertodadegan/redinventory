<?php

Route::get('/',function(){
	return view('login');
});//->middleware('PrimeiroAcesso');

Route::post('/login', 'UsuariosController@index');

//configuracao inicial
Route::get('/configuracaoInicial',function(){
	return view('configInicial.configInicial');
});
Route::get('/primeiroScann',function(){
	return view('configInicial.primeiroScann');
});
//grupo de rotas de funcionalidades que verifica se ha usuario logado
Route::group(['middleware' => 'RedirectIfAuthenticated'], function(){
	$this->get('/dashboard', function(){
		return view('dashboard');
	});
	$this->get('/usuarios',function(){
		return view('usuarios');
	});
	$this->get('/rede','HostsController@index');
	$this->get('/scanner',function(){
		return view('scanner');
	});
	$this->post('/scanner/{modo}','HostController@scanner');
	$this->get('/config','Controller@getConfig');
	$this->post('/salvarConfig','Controller@setConfig');
	$this->get('/bug',function(){
		return view('bug');
	});
});