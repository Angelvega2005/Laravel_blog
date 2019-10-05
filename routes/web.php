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

Route::get('/', function () {
    return view('welcome');
});

Route::get('utgz/{nombre?}',function($nombre="Por favor inserte un nombre"){
	return 'Hola Utgz'.$nombre;

});


Route::get('dia1', function(){
	return view ('ejemplo');

});

Route::resource('categorias','CategoriasController');

Route::get('biblioteca', function(){

return view('biblioteca');
});

Route::resource('carreras','CarrerasController');

Route::resource('libros','LibrosController');
Route::resource('roles','RolesController');

Route::get('biblioteca',function(){

	return view('biblioteca');
});


