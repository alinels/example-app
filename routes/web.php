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

Route::group(['middleware' => 'web'], function(){


    Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Auth::routes();
   // Route::get('/home', 'HomeController@index')->name('home');
   Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index'])->name('home');

Route::get('/products/new', [App\Http\Controllers\ProductsController::class, 'new'])->name('home');

Route::post('/products/add', [App\Http\Controllers\ProductsController::class, 'add'])->name('home');
Route::get('/products/{id}/edit', [App\Http\Controllers\ProductsController::class, 'edit'])->name('home');
Route::post('/products/update/{id}', [App\Http\Controllers\ProductsController::class, 'update'])->name('home');
Route::delete('/products/delete/{id}', [App\Http\Controllers\ProductsController::class, 'delete'])->name('home');
Route::delete('/products/delete/{id}', [App\Http\Controllers\ProductsController::class, 'delete'])->name('home');
Route::post('/products/enableText/{id}', [App\Http\Controllers\ProductsController::class, 'enableText'])->name('home');






