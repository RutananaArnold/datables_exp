<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PriceController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [UsersController::class, 'index'])->name('users.index');

Route::post('/addPrice', [App\Http\Controllers\PriceController::class, 'priceScreen'])->name('price');
Route::post('/addFunction', [App\Http\Controllers\PriceController::class, 'addNewPrice'])->name('addButton');
Route::get('/prices', [App\Http\Controllers\PriceController::class, 'AddedPrices'])->name('priceData');
