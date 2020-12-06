<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use Monolog\Processor\HostnameProcessor;

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
    return view('home');
});

Route::get('/home', 'App\Http\Controllers\OrderController@home')->name('home');
// Route::get('/product', 'App\Http\Controllers\OrderController@product')->name('product');
Route::get('/order', 'App\Http\Controllers\BeliController@order')->name('order');
Route::get('/history', 'App\Http\Controllers\BeliController@history')->name('history');
Route::get('/insert', 'App\Http\Controllers\OrderController@insert')->name('insert');

Route::post('/update', 'App\Http\Controllers\OrderController@update')->name('update');

Route::post('/storeproduct', 'App\Http\Controllers\OrderController@storeproduct')->name('storeproduct');
Route::get('/product', [OrderController::class, 'product'])->name('product');

Route::get('/edit/{id}', 'App\Http\Controllers\OrderController@edit')->name('edit');
// Route::post('/edit/{id}',[OrderController::class, 'edit'])->name('edit');

//delete
Route::get('/delete/{id}', 'App\Http\Controllers\OrderController@delete')->name('delete');


//prosesorder
Route::get('/prosesorder/{id}', 'App\Http\Controllers\BeliController@prosesorder')->name('prosesorder');
Route::post('/store', 'App\Http\Controllers\BeliController@store')->name('store');


