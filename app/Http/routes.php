<?php

Route::get('/', function () {
	$videos = \App\Video::orderBy('id', 'DESC')->get();
	$destaque = \App\Video::orderBy('id', 'DESC')->take(1)->get();

	$agendas = \App\Agenda::orderBy('data')->whereRaw('data >= curdate()')->orderBy('hora')->get();

    return view('welcome', compact('videos', 'agendas', 'destaque'));
});

Route::get('/biografias', function () {
    return view('bios');
});
Route::get('/fotos', 'FotosController@index');


Route::auth();

Route::get('/home', 'HomeController@index');

//criar rotas bios e fotos

Route::post('/criaragenda', 'HomeController@criarAgenda');
Route::get('/{id}/deletar', 'HomeController@deletaAgenda');
Route::get('/{id}/editar', 'HomeController@editaAgenda');

Route::post('/criarvideo', 'HomeController@criarVideo');
Route::get('/{id}/delvideo', 'HomeController@deletaVideo');

Route::get('usuarios', 'HomeController@getUsers');
Route::get('/{id}/set', 'HomeController@set');
Route::get('/{id}/deluser', 'HomeController@deletaUser');

Route::get('/baixar', 'WelcomeController@getDownload');

Route::resource('/ideia', 'IdeiaController@store');