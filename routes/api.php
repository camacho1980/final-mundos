<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// IMPORTAMOS PageController
use App\Http\Controllers\MensajeController;
// use App\Http\Controllers\PageController;


//CREAMOS LA RUTA API
Route::post('/contacto',[MensajeController::class,'apiMensaje'])->name('api.mensaje');
// Route::post('/contacto',[PageController::class,'apiMensaje'])->name('api.mensaje');
