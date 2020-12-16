<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
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

Route::get('/', 'IndexController@index')->name('index');

// |--------------------------------------------------------------------------
// | RUTAS DE ADMINISTRACION
// |--------------------------------------------------------------------------
Route::resource('administracion', 'administracion\DashboardController');
Route::resource('categorias', 'administracion\CategoriasController');
Route::resource('productos', 'administracion\ProductoController');
Route::get('fotoPrincipal/{id?}', 'administracion\ProductoController@fotoPrincipal')->name('fotoPrincipal');
Route::get('imagenCarousel/{id?}', 'administracion\ProductoController@displayFotoCarousel')->name('displayFotoCarousel');

// |--------------------------------------------------------------------------
// | RUTA DE CONTACTO
// |--------------------------------------------------------------------------
// Route::resource('contacto', 'ContactoController');
Route::get('/contacto', 'ContactoController@index');
Route::post('/', 'ContactoController@store')->name('contact');

// |--------------------------------------------------------------------------
// | RUTA DE PRODUCTOS
// |--------------------------------------------------------------------------
Route::get('/producto/{id}', 'IndexController@producto');

// |--------------------------------------------------------------------------
// | RUTA DE CONFIGURACION DE CONTACTO
// |--------------------------------------------------------------------------
Route::get('admnistracion/configuraciones/contacto', 'administracion\ConfiguracionesController@contacto');
Route::post('administracion/configuraciones/contacto', 'administracion\ConfiguracionesController@contacto')->name('configContacto');

Route::resource('detalleCompra', 'Administracion\DetalleComprasController');


