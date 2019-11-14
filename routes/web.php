<?php
use App\Exports\ComerciosExport;
use App\Texts;
use App\Images;
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
    $textos = Texts::where('id', '1')->first();
    $images = Images::where('id', '1')->first();
    return view('front.inicio', compact('textos', 'images'));
})->name('inicio');

//BACKEND

Auth::routes();

// USERS
Route::middleware('auth')->group(function (){

	Route::get('/usuarios', 'UsersController@index')->name('users.index')->middleware('role:superadmin');
	Route::get('/crear-usuarios', 'UsersController@create')->name('users.create')->middleware('role:superadmin');
	Route::post('/guardar-usuarios', 'UsersController@store')->name('users.store')->middleware('role:superadmin');
	Route::get('/editar-usuarios', 'UsersController@edit')->name('users.edit')->middleware('role:superadmin');
	Route::post('/actualizar-usuarios', 'UsersController@update')->name('users.update')->middleware('role:superadmin');
	Route::get('/borrar-usuarios', 'UsersController@destroy')->name('users.destroy')->middleware('role:superadmin');
	Route::get('/buscador-usuarios', 'UsersController@buscadorUsuarios')->name('users.buscar')->middleware('role:superadmin');
});

//Barrios

Route::middleware('auth')->group(function()
{
	Route::get('/barrios', 'BarriosController@index')->name('barrios.index');
	Route::get('/crear-barrios', 'BarriosController@create')->name('barrios.create');
	Route::post('/guardar-barrios', 'BarriosController@store')->name('barrios.store');
	Route::get('/editar-barrios', 'BarriosController@edit')->name('barrios.edit');
	Route::get('/actualizar-barrios', 'BarriosController@update')->name('barrios.update');
	Route::get('/borrar-barrios', 'BarriosController@destroy')->name('barrios.destroy');
	Route::get('/buscador-barrios', 'BarriosController@buscadorBarrios')->name('barrios.buscar');
});

//Configuraci贸n del Sitio

Route::middleware('auth')->group(function()
{
	Route::get('/config', 'ConfigController@index')->name('config.index');
  Route::post('/identidad', 'ConfigController@identidad')->name('config.identidad');
  Route::post('/principal', 'ConfigController@paginaPrincipal')->name('config.principal');
  Route::get('/contact', 'ConfigController@contacto')->name('config.contacto');
  Route::get('/redes', 'ConfigController@redes')->name('config.redes');
});



Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function()
{
  //CRUD Comercios
  Route::get('/comercio-crear', 'ComercioController@create')->name('comercio.create');
  Route::get('/comercio', 'ComercioController@index')->name('comercio.index');
  Route::get('/comercio-ver-{comercio}', 'ComercioController@show')->name('comercio.show');
  Route::get('/comercio-editar-{comercio}', 'ComercioController@edit')->name('comercio.edit');
  Route::post('/comercio-guardar', 'ComercioController@store')->name('comercio.store');
  Route::post('/comercio-actualizar-{comercio}', 'ComercioController@update')->name('comercio.update');
  Route::get('/comercio-eliminar-{comercio}', 'ComercioController@destroy')->name('comercio.destroy');
});

// DATOS LOCAL
Route::middleware('auth')->group(function()
{
  Route::get('/datos_comercio-crear-{comercio}', 'DatosLocalController@create')->name('datos.create');
  Route::post('/datos_comercio-guardar', 'DatosLocalController@store')->name('datos.store');
  Route::get('/datos_comercio-editar-{datosLocal}', 'DatosLocalController@edit')->name('datos.edit');
  Route::get('/datos_comercio-eliminar-{datosLocal}', 'DatosLocalController@destroy')->name('datos.destroy');
  Route::get('/datos_comercio-actualizar-{datosLocal}', 'DatosLocalController@update')->name('datos.update');
});

// DATOS REPRESENTANTE LEGAL

Route::middleware('auth')->group(function()
{
  Route::get('/datos_representante-crear-{comercio}', 'RepresentanteController@create')->name('representante.create');
  Route::post('/datos_representante-guardar', 'RepresentanteController@store')->name('representante.store');
  Route::get('/datos_representante-editar-{representante}', 'RepresentanteController@edit')->name('representante.edit');
  Route::get('/datos_representante-eliminar-{representante}', 'RepresentanteController@destroy')->name('representante.destroy');
  Route::get('/datos_representante-actualizar-{representante}', 'RepresentanteController@update')->name('representante.update');
});

// DATOS IMPUESTOS

Route::middleware('auth')->group(function()
{
  Route::get('/rentas-crear-{comercio}', 'ComercioController@createImpuestos')->name('impuestos.create');
  Route::post('/rentas-guardar', 'ComercioController@storeImpuestos')->name('impuestos.store');
  Route::get('/rentas-editar-{impuestos}', 'ComercioController@editImpuestos')->name('impuestos.edit');
  Route::get('/rentas-eliminar-{impuestos}', 'ComercioController@destroyImpuestos')->name('impuestos.destroy');
  Route::get('/rentas-actualizar-{impuestos}', 'ComercioController@updateImpuestos')->name('impuestos.update');
});

// DATOS DE REDES SOCIALES

Route::middleware('auth')->group(function()
{
  Route::get('/redes-crear-{comercio}', 'RedesController@create')->name('redes.create');
  Route::post('/redes-guardar', 'RedesController@store')->name('redes.store');
  Route::get('/redes-editar-{redes}', 'RedesController@edit')->name('redes.edit');
  Route::get('/redes-eliminar-{redes}', 'RedesController@destroy')->name('redes.destroy');
  Route::get('/redes-actualizar-{redes}', 'RedesController@update')->name('redes.update');
});


// DATOS GESTION DE MERCADEO

Route::middleware('auth')->group(function()
{
  Route::get('/gestion-crear-{comercio}', 'GestionMercadoController@create')->name('gestion.create');
  Route::post('/gestion-guardar', 'GestionMercadoController@store')->name('gestion.store');
  Route::get('/gestion-editar-{gestion}', 'GestionMercadoController@edit')->name('gestion.edit');
  Route::get('/gestion-eliminar-{gestion}', 'GestionMercadoController@destroy')->name('gestion.destroy');
  Route::get('/gestion-actualizar-{gestion}', 'GestionMercadoController@update')->name('gestion.update');
});

Route::get('/mensaje', 'MensajesController@enviarMensaje')->name('enviarMensaje');

//BUSCADOR COMERCIOS

Route::post('/resultados', 'FrontController@buscador')->name('buscador');
Route::get('/res', 'FrontController@buscadorAdmin')->name('buscadorAdmin');



// CRUD IMPUESTOS
Route::get('/impuestos', 'ImpuestosController@index')->name('crudImpuestos.index');
Route::get('/impuestos-crear', 'ImpuestosController@create')->name('crudImpuestos.create');
Route::post('/impuestos-guardar', 'ImpuestosController@store')->name('crudImpuestos.store');
Route::get('/impuestos-edit-{impuesto}', 'ImpuestosController@edit')->name('crudImpuestos.edit');
Route::post('/impuestos-actualizar-{impuesto}', 'ImpuestosController@update')->name('crudImpuestos.update');
Route::get('/impuestos-eliminar-{impuesto}', 'ImpuestosController@destroy')->name('crudImpuestos.destroy');

// CRUD REUISITOS
Route::get('/requisitos', 'RequisitoController@index')->name('requisitos.index');
Route::get('/requisitos-crear', 'RequisitoController@create')->name('requisitos.create');
Route::post('/requisitos-guardar', 'RequisitoController@store')->name('requisitos.store');
Route::get('/requisitos-edit-{requisito}', 'RequisitoController@edit')->name('requisitos.edit');
Route::post('/requisitos-actualizar-{requisito}', 'RequisitoController@update')->name('requisitos.update');
Route::get('/requisitos-eliminar-{requisito}', 'RequisitoController@destroy')->name('requisitos.destroy');


// REPORTES

Route::get('/reportes', 'ReportesController@index')->name('reportes.index')->middleware('auth');
Route::post('/comercios_al_dia', 'ReportesController@ComercioAlDia')->name('reportes.alDia')->middleware('auth');
Route::post('/comercios_por_categoria', 'ReportesController@categoria')->name('reportes.categoria')->middleware('auth');
Route::post('/pqr_por_fechas', 'ReportesController@msjPorFechas')->name('reportes.porFechas')->middleware('auth');
Route::get('/pqr_total', 'ReportesController@total')->name('reportes.consolidado')->middleware('auth');
Route::get('/consolidado', 'ReportesController@datosAbiertos')->name('reportes.datosAbiertos')->middleware('auth');

// INDICADORES DE GESTION
Route::get('/indicadores', 'IndicadoresController@index')->name('indicadores.index')->middleware('auth');
Route::post('/indicadores-resultados_impuesto', 'IndicadoresController@impuesto')->name('indicadores.impuesto')->middleware('auth');
Route::post('/indicadores-resultados_requisito', 'IndicadoresController@requisito')->name('indicadores.requisito')->middleware('auth');

//Mensajes
Route::get('/mensajes', 'MensajesController@verMensajes')->name('verMensajes');
Route::get('/leer-pqr', 'MensajesController@leerMensaje')->name('leerMensaje');
Route::get('/leer-mensaje', 'MensajesController@leerMsjContacto')->name('leerMsjContacto');

// Contacto
Route::get('/contacto', 'MensajesController@contacto')->name('contacto');
Route::get('/contacto/mensaje', 'MensajesController@MsjContacto')->name('MsjContacto');

// AYUDA

Route::get('/ayuda', 'FrontController@ayuda')->name('ayuda');

//PDF
Route::get('/pdf', 'FrontController@pdf')->name('descargarPDF');

//FRONT
Route::get('/actividad', 'FrontController@mostrarUnico')->name('mostrarUnico');
Route::get('/categoria-{categoria}', 'FrontController@mostrarComercio')->name('mostrarComercio');
