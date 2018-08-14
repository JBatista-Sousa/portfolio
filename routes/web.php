<?php

Route::get('/', function () {
    return view('welcome');
});

// Home

Route::get('/home', 'HomeController@home');






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



//Disciplinas
Route::get('/disciplinas/cadastro', 'DisciplinaController@cadastro');

Route::get('/disciplinas', 'DisciplinaController@lista');

Route::get('/disciplinas/{id}', 'DisciplinaController@mostra');

Route::post('/disciplinas', 'DisciplinaController@adiciona');

Route::get('/disciplinas/{id}/destroy', 'DisciplinaController@destroy');

Route::get('/disciplinas/{id}/edita', 'DisciplinaController@edita');

Route::post('/disciplinas/{id}', 'DisciplinaController@update');


//Professores
Route::get('/professores/cadastro', 'ProfessorController@cadastro');

Route::get('/professores', 'ProfessorController@lista');

Route::get('/professores/{id}', 'ProfessorController@mostra');

Route::post('/professores', 'ProfessorController@adiciona');

Route::get('/professores/{id}/destroy', 'ProfessorController@destroy');

Route::get('/professores/{id}/edita', 'ProfessorController@edita');

Route::post('professores/{id}', 'ProfessorController@update');



//Periodos
//Route::post('/cursos/periodos/adiciona', 'PeriodoController@adiciona');

Route::get('/periodos/cadastro', 'PeriodoController@cadastro');

//Route::post('/periodos', 'PeriodoController@lista');





//professores

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
