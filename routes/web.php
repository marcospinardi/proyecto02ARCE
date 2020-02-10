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

Route::get('/belci/{nombre}', function($nombre){

    return view('lbelcebu', [ 'nombre'=>$nombre, 'apellido'=>'santana' ] );
} );

Route::get('/fruta', function(){
    return 'sandía';
});

Route::post('/saludo', function(){
    $nombre = $_POST['nombre'];
    return view('holaMundo', [ 'nombre'=>$nombre ] );
});

Route::get('/form', function(){
    return view('formulario');
});

//Route::view('/adminCategorias', 'adminCategorias');
Route::get('/adminCategorias', 'CategoriasController@index');

############## CRUD Marcas ###################
Route::get('/adminMarcas', 'MarcasController@index');
Route::get('/formAgregarMarca', 'MarcasController@create');
Route::post('/agregarMarca', 'MarcasController@store');

############## CRUD PRODUCTOS ###################
Route::get('/adminProductos', 'ProductosController@index');
