<?php

Route::get('/',function(){
	return view('login');
});//->middleware('PrimeiroAcesso');

Route::post('/login', 'UsuariosController@index');
Route::get('/logout', 'UsuariosController@logout');

//primeiro acesso -> verificar se já não foi feita a config inicial
Route::group(['middleware' => 'PrimeiroAcesso'],function(){
	//configuracao inicial
	$this->get('/configuracaoInicial','ConfigsController@index');
	//salvar configuracoes iniciais
	$this->post('/salvarConfig','ConfigsController@store');
	//primeiro usuario
	$this->get('/primeiroUsuario',function(){
		return view('configInicial.primeiroUsuario');
	});
	$this->post('/cadPrimeiroUsuario','UsuariosController@store');
	//primeiro scann
	$this->get('/primeiroScann',function(){
		return view('configInicial.primeiroScann');
	});
});

//grupo de rotas de funcionalidades que verifica se ha usuario logado
Route::group(['middleware' => 'RedirectIfAuthenticated'], function(){
	$this->get('/dashboard', function(){
		return view('dashboard');
	});
	// Usuarios
	$this->get('/usuarios','UsuariosController@listar');
	$this->post('/cadUsuario','UsuariosController@store');
	$this->post('/delUsuario','UsuariosController@destroy');
	// Usuarios
	// Rede
	$this->get('/rede','HostsController@index');
	$this->post('/cadHost','HostsController@store');
	$this->post('/delHost','HostsController@destroy');
	// Rede
	// Scanner
	$this->get('/scanner',function(){
		return view('scanner');
	});
	$this->get('/scanner/{modo}','HostsController@scanner');
	$this->post('/scanner/{modo}','HostsController@scanner');
	// Scanner
	// Config
	$this->get('/config','ConfigsController@getConfig');
	$this->post('/atualizarConfig/{id}','ConfigsController@update');
	// Config
	// Bugs
	$this->get('/bug',function(){
		return view('bug');
	});
	// Bugs
	//Relatórios
	$this->get('/relatorios',function(){
		return view('relatorios');
	});
	$this->get('/gerarRelatorio/{tipo}','HostsController@report');
	//Relatórios
});