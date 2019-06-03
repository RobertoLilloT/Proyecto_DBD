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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*Rutas de usuario*/

Route::post('/usuario', 'UserController@store');
Route::put('/usuario/{id}', 'UserController@update');
Route::get('/usuario','UserController@index');
Route::get('/usuario/{id}','UserController@show');
Route::delete('/usuario/{id}','UserController@destroy');

/*Rutas de tarjeta*/

Route::post('/tarjeta', 'TarjetaController@store');
Route::put('/tarjeta/{id}', 'TarjetaController@update');
Route::get('/tarjeta','TarjetaController@index');
Route::get('/tarjeta/{id}','TarjetaController@show');
Route::delete('/tarjeta/{id}','TarjetaController@destroy');

/*Rutas de categoria*/

Route::post('/categoria', 'CategoriaController@store');
Route::put('/categoria/{id}', 'CategoriaController@update');
Route::get('/categoria','CategoriaController@index');
Route::get('/categoria/{id}','CategoriaController@show');
Route::delete('/categoria/{id}','CategoriaController@destroy');

/*Rutas de producto*/

Route::post('/producto', 'ProductoController@store');
Route::put('/producto/{id}', 'ProductoController@update');
Route::get('/producto','ProductoController@index');
Route::get('/producto/{id}','ProductoController@show');
Route::delete('/producto/{id}','ProductoController@destroy');

/*Rutas de calle*/

Route::post('/calle', 'CalleController@store');
Route::put('/calle/{id}', 'CalleController@update');
Route::get('/calle','CalleController@index');
Route::get('/calle/{id}','CalleController@show');
Route::delete('/calle/{id}','CalleController@destroy');

/*Rutas de restaurante*/

Route::post('/restaurante', 'RestauranteController@store');
Route::put('/restaurante/{id}', 'RestauranteController@update');
Route::get('/restaurante','RestauranteController@index');
Route::get('/restaurante/{id}','RestauranteController@show');
Route::delete('/restaurante/{id}','RestauranteController@destroy');

/*Rutas de despacho*/

Route::post('/despacho', 'DespachoController@store');
Route::put('/despacho/{id}', 'DespachoController@update');
Route::get('/despacho','DespachoController@index');
Route::get('/despacho/{id}','DespachoController@show');
Route::delete('/despacho/{id}','DespachoController@destroy');

/*Rutas de pago*/

Route::post('/pago', 'PagoController@store');
Route::put('/pago/{id}', 'PagoController@update');
Route::get('/pago','PagoController@index');
Route::get('/pago/{id}','PagoController@show');
Route::delete('/pago/{id}','PagoController@destroy');

/*Rutas de reserva*/

Route::post('/reserva', 'ReservaController@store');
Route::put('/reserva/{id}', 'ReservaController@update');
Route::get('/reserva','ReservaController@index');
Route::get('/reserva/{id}','ReservaController@show');
Route::delete('/reserva/{id}','ReservaController@destroy');

/*Rutas de mesa*/

Route::post('/mesa', 'MesaController@store');
Route::put('/mesa/{id}', 'MesaController@update');
Route::get('/mesa','MesaController@index');
Route::get('/mesa/{id}','MesaController@show');
Route::delete('/mesa/{id}','MesaController@destroy');

/*Rutas de pedido*/

Route::post('/pedido', 'PedidoController@store');
Route::put('/pedido/{id}', 'PedidoController@update');
Route::get('/pedido','PedidoController@index');
Route::get('/pedido/{id}','PedidoController@show');
Route::delete('/pedido/{id}','PedidoController@destroy');

/*Rutas de comentario*/

Route::post('/comentario', 'ComentarioController@store');
Route::put('/comentario/{id}', 'ComentarioController@update');
Route::get('/comentario','ComentarioController@index');
Route::get('/comentario/{id}','ComentarioController@show');
Route::delete('/comentario/{id}','ComentarioController@destroy');

/*Rutas de menu*/

Route::post('/menu', 'MenuController@store');
Route::put('/menu/{id}', 'MenuController@update');
Route::get('/menu','MenuController@index');
Route::get('/menu/{id}','MenuController@show');
Route::delete('/menu/{id}','MenuController@destroy');

/*Rutas de historial*/

Route::post('/historial', 'HistorialController@store');
Route::put('/historial/{id}', 'HistorialController@update');
Route::get('/historial','HistorialController@index');
Route::get('/historial/{id}','HistorialController@show');
Route::delete('/historial/{id}','HistorialController@destroy');

/*Rutas de ciudad*/

Route::post('/ciudad', 'CiudadController@store');
Route::put('/ciudad/{id}', 'CiudadController@update');
Route::get('/ciudad','CiudadController@index');
Route::get('/ciudad/{id}','CiudadController@show');
Route::delete('/ciudad/{id}','CiudadController@destroy');

/*Rutas de comuna*/

Route::post('/comuna', 'ComunaController@store');
Route::put('/comuna/{id}', 'ComunaController@update');
Route::get('/comuna','ComunaController@index');
Route::get('/comuna/{id}','ComunaController@show');
Route::delete('/comuna/{id}','ComunaController@destroy');

/*Rutas de direccion*/

Route::post('/direccion', 'DireccionController@store');
Route::put('/direccion/{id}', 'DireccionController@update');
Route::get('/direccion','DireccionController@index');
Route::get('/direccion/{id}','DireccionController@show');
Route::delete('/direccion/{id}','DireccionController@destroy');


















