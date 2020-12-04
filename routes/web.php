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

Route::get('/', 'IndexController@index');

// |--------------------------------------------------------------------------
// | RUTAS DE ADMINISTRACION
// |--------------------------------------------------------------------------
Route::resource('administracion', 'administracion\DashboardController');
Route::resource('productos', 'administracion\ProductoController');

// |--------------------------------------------------------------------------
// | RUTA DE CONTACTO
// |--------------------------------------------------------------------------
Route::get('/contacto', function () {
    return view('contacto');
});

// |--------------------------------------------------------------------------
// | RUTA DE PRODUCTOS
// |--------------------------------------------------------------------------
Route::get('/producto/{id}', 'IndexController@producto');

// |--------------------------------------------------------------------------
// | RUTA DE CONFIGURACION DE CONTACTO
// |--------------------------------------------------------------------------
Route::get('admnistracion/configuraciones/contacto', 'administracion\ConfiguracionesController@contacto')->name('contacto');
Route::post('administracion/configuraciones/contacto', 'administracion\ConfiguracionesController@contacto')->name('contacto');

Route::resource('detalleCompra', 'Administracion\DetalleComprasController');


