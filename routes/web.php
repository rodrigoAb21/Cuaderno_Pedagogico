<?php

Route::get('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('login', [
    'as' => '',
    'uses' => 'Auth\LoginController@login'
]);
Route::post('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
]);

Route::get('/', function () {
    return view('home');
});

Route::resource('estudiantes', 'EstudianteController');
Route::resource('asistencia', 'AsistenciaController');
Route::resource('trimestres', 'TrimestreController');
Route::resource('materias', 'MateriaController');
Route::resource('dimensiones', 'DimensionController');
