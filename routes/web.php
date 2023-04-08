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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\SauceController::class, 'index'])->name('welcome');
Route::get('/sauces/{id}', [App\Http\Controllers\SauceController::class, 'show'])->name('sauces.show');
Route::get('/create', [App\Http\Controllers\SauceController::class, 'create'])->name('sauces.create');
Route::post('/store', [App\Http\Controllers\SauceController::class, 'store'])->name('sauces.store');
Route::delete('/sauces/{id}', [App\Http\Controllers\SauceController::class, 'destroy'])->name('sauces.destroy');
Route::get('/edit/{id}', [App\Http\Controllers\SauceController::class, 'edit'])->name('sauces.edit');
Route::put('/update/{id}', [App\Http\Controllers\SauceController::class, 'update'])->name('sauces.update');

