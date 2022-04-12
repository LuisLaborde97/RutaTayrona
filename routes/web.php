<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ToursController;

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

Route::controller(InfoController::class)->group(function(){

    Route::get('/','home')->name('home');
    Route::get('contactanos','contact')->name('contacto');
    Route::get('sobre-nosotros','sobre_nosotros')->name('sobre-nosotros');

});

Route::controller(ToursController::class)->group(function(){

    Route::get('tours','show')->name('Tours');
    Route::get('tour/{id}', 'index')->name('tour');
});

Route::controller(ClienteController::class)->group(function(){
    Route::post('tour/cliente', 'store')->name('cliente.store');
});



