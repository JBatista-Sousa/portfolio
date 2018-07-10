<?php

Route::get('/', function () {
    return view('welcome');
});
//Cursos
Route::get('/cursos/cadastro', 'CursoController@cadastro');

Route::get('/cursos', 'CursoController@lista');

Route::get('/cursos/{id}', 'CursoController@mostra');

Route::post('/cursos', 'CursoController@adiciona');

Route::get('/cursos/{id}/destroy', 'CursoController@destroy');


///////////////////////////////////////////////////////////////

Route::get('/cursos/{id}/edita', 'CursoController@edita');



Route::post('/cursos/{id}', 'CursoController@update');

//Route::post('/cursos/update', 'CursoController@update');










//professores
