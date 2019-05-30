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
    return view('inicio', compact('textos', 'images'));
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
	Route::get('/guardar-barrios', 'BarriosController@store')->name('barrios.store');
	Route::get('/editar-barrios', 'BarriosController@edit')->name('barrios.edit');
	Route::get('/actualizar-barrios', 'BarriosController@update')->name('barrios.update');
	Route::get('/borrar-barrios', 'BarriosController@destroy')->name('barrios.destroy');
	Route::get('/buscador-barrios', 'BarriosController@buscadorBarrios')->name('barrios.buscar');
});

//Configuración del Sitio

Route::middleware('auth')->group(function()
{
	Route::get('/config', 'ConfigController@index')->name('config.index');
  Route::post('/identidad', 'ConfigController@identidad')->name('config.identidad');
  Route::post('/principal', 'ConfigController@paginaPrincipal')->name('config.principal');
  Route::get('/contact', 'ConfigController@contacto')->name('config.contacto');
  Route::get('/redes', 'ConfigController@redes')->name('config.redes');
});



Route::get('/home', 'HomeController@index')->name('home');


// RUTAS PARA CRUD COMERCIOS Y CATEGORÍAS
//Vistas COMERCIOS
Route::get('/crear-comercio', 'HomeController@crearComercioView')->name('crearComercioView');
Route::get('/traer-actividades', 'comercioController@getActividades')->name('getActividades');
Route::get('/traer-categorias/{id}', 'comercioController@getCategorias')->name('getCategorias');
Route::get('/listar-comercios', 'HomeController@listarComercios')->name('listarComercios');
Route::get('/actualizar-comercio', 'HomeController@actualizarComercioView')->name('actualizarComercioView');
//CRUD Comercios
Route::post('/crear-com', 'HomeController@crearComercio')->name('crearComercio');
Route::post('/actualizar-com', 'HomeController@actualizarComercio')->name('actualizarComercio');
Route::get('/mensaje', 'MensajesController@enviarMensaje')->name('enviarMensaje');
//BUSCADOR COMERCIOS

Route::get('/resultados', 'comercioController@buscador')->name('buscador');
Route::get('/res', 'comercioController@buscadorAdmin')->name('buscadorAdmin');

//VISTAS CATEGORIAS
Route::get('/crear-categoria', 'comercioController@crearCategoriaView')->name('crearCategoriaView');
Route::get('/listar-categorias', 'comercioController@listarCategorias')->name('listarCategorias');
// CRUD CATEGORÍAS
Route::get('/crear-cat', 'comercioController@crearCategoria')->name('crearCategoria');

// REPORTES

Route::get('/reportes', 'ReportesController@index')->name('reportes.index')->middleware('auth');
Route::get('/buscar-reportes', 'ReportesController@buscar')->name('reportes.buscar')->middleware('auth');
Route::get('/download', 'ReportesController@export' )->name('reportes.descarga')->middleware('auth');

//Mensajes
Route::get('/mensajes', 'HomeController@verMensajes')->name('verMensajes');
Route::get('/leer-pqr', 'HomeController@leerMensaje')->name('leerMensaje');
Route::get('/leer-mensaje', 'HomeController@leerMsjContacto')->name('leerMsjContacto');

// Contacto
Route::get('/contacto', 'MensajesController@contacto')->name('contacto');
Route::get('/contacto/mensaje', 'MensajesController@MsjContacto')->name('MsjContacto');


//PDF
Route::get('/pdf', 'comercioController@pdf')->name('descargarPDF');

//FRONT
Route::get('/actividad', 'comercioController@mostrarUnico')->name('mostrarUnico');
Route::get('/{categoria}/', 'comercioController@mostrarComercio')->name('mostrarComercio');
