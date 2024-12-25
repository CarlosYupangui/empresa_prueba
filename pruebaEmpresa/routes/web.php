<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\Panel\MisVisController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

///////RUTAS PAGINA WEB///////////
Route::get('/', [PaginaController::class, 'index']);

///////RUTAS PANEL DE CONTROL////////
Route::get('admin', [PanelController::class, 'index']);

//////RUTAS MISION VISION////////////
Route::get('/MisVis', [MisVisController::class, 'index']);
Route::get('/editMisVis', [MisVisController::class, 'edit']);

//////RUTAS LOGIN//////////////
Route::get('/login', [PaginaController::class, 'login']);
