<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\InfoControllerUS;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ToursControllerUS;

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

Route::controller(InfoControllerUS::class)->group(function(){

    Route::get('en','homeUS')->name('homeUS');
    Route::get('contactanos/en','contactUS')->name('contactoUS');
    Route::get('sobre-nosotros/en','sobre_nosotrosUS')->name('sobre-nosotrosUS');

});

Route::controller(ToursController::class)->group(function(){

    Route::get('tours','show')->name('Tours');
    Route::get('tour/{id}', 'index')->name('tour');
});

Route::controller(ToursControllerUS::class)->group(function(){

    Route::get('en/tours','show_us')->name('ToursUS');
    Route::get('en/tour/{id}', 'index_us')->name('tourUS');
});




Route::controller(PaymentController::class)->group(function(){
    Route::post('Payment/Proccess/paypal', 'completePayment')->name('payment.completePayment');
    Route::get('compraFinalizada/{codigoCompra}','postPayment')->name('payment.postPayment');
});

