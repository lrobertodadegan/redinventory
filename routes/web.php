<?php

Route::get('/',function(){
	return view('login');
});
Route::get('/configuracaoInicial',function(){
	return view('configInicial.configInicial');
});
Route::get('/primeiroScann',function(){
	return view('configInicial.primeiroScann');
});
Route::get('/bug',function(){
	return view('bug');
});
Route::get('/config',function(){
	return view('config');
});
Route::get('/dashboard',function(){
	return view('dashboard');
});
Route::get('/rede',function(){
	return view('rede');
});
Route::get('/scanner',function(){
	return view('scanner');
});
Route::get('/usuarios',function(){
	return view('usuarios');
});
//configuracao inicial
/*
Route::get('/configuracaoInicial',function(){
	return view('configInicial.configInicial');
});
Route::get('/primeiroScann',function(){
	return view('configInicial.primeiroScann');
});

//login
Route::get('/',function(){
	return view('login');
});->middleware('PrimeiroAcesso');//verifica se é o primeiro acesso

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
})->middleware('RedirectIfAuthenticated');*/