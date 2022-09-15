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

Route::get('/', function () {
    return view('customer.index');
});
Route::get('/home', function () {
    return view('home');
});
Route::resource('car', App\Http\Controllers\CarController::class);
Route::resource('customer', App\Http\Controllers\CustomerController::class);
Route::resource('region', App\Http\Controllers\RegionController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
