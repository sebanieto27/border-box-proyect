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


