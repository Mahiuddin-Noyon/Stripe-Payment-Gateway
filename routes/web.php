<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/checkout', 'App\Http\Controllers\PaymentGetwayController@checkout');
Route::post('/checkout', 'App\Http\Controllers\PaymentGetwayController@afterpayment')->name('checkout.credit-card');
