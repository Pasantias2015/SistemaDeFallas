<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'HomeController@index');




Route::get('home', 'HomeController@index');
Route::get('/', 'HomeController@index');

Route::get('unidad', 'UnidadController@index');
Route::get('falla', 'FallaController@registrarfalla');


Route::controllers([
    'auth' => 'Auth\AuthController',
    //'password' => 'Auth\PasswordController',
]);



/*Vista de Usuarios*/
Route::get('rusuario','RegistrarController@index');
Route::get('usuariosall','RegistrarController@index');
Route::get('changepassword','RegistrarController@change');


/*Vistas De Operador*/
//Route::get('roperador','OperadorController@registraroperador');
//Route::get('operadores','OperadorController@index');

/*Vistas De Unidades*/
Route::get('uoperador','UnidadController@asignarunidad');
Route::get('uupdate','UnidadController@update');

/*Vistas De Fallas*/
Route::get('rfalla','FallaController@registrarfalla');
Route::get('rcfalla','FallaController@registrarcategoriafalla');
Route::get('rfuoperador','FallaController@registrarfallaunidadoperador');
Route::get('rtfalla','FallaController@registrartipofalla');
Route::get('incidenciaunidad','ReporteController@incidenciaunidad');
Route::get('cedula','ReporteController@cedula');
/*Vistas De Reportes*/
//morris
Route::get('grafica','ReporteController@grafica');

/*Vistas De Transacciones
Route::get('servicios/operadores','TransaccionController@servicio_operador');
Route::get('servicios/unidades','TransaccionController@servicio_unidad');
*/
resource('opciones','OpcionesController');
resource('unidades','UnidadController');
resource('operadores','OperadorController');
resource('unidadoperadores','UnidadOperadorController');
resource('fallas','FallaController');
resource('categorias','CategoriaController');
resource('tipos','TipoController');
resource('reportes','ReporteController');
resource('operadores','OperadorController');
resource('transacciones','TransaccionController');
resource('servicios','ServicioController');
resource('serviciolugares','ServicioLugarController');
resource('lugares','LugarController');
resource('patios','PatioController');
resource('puestos','PuestoController');
resource('modelos','ModeloController');
resource('secciones','SeccionController');
resource('grupos','GrupoController');
resource('piezas','PiezaController');
resource('mantenimiento','MantenimientoController');
resource('herramientas','HerramientaController');
resource('almacen','AlmacenController');
resource('asignar','AsignarController');
resource('cajas','CajaController');
resource('coordinaciones','CoordinacionController');