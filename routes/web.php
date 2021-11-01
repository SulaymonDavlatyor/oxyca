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
Route::get('/home/pages/customers', [App\Http\Controllers\CustomerController::class, 'index'])->name('customers.index');
Route::get('/home/pages/customers/edit', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customers.edit');
Route::put('/home/pages/customers/update', [App\Http\Controllers\CustomerController::class, 'update'])->name('customers.update');
Route::get('/home/pages/customers/delete', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('customers.delete');
Route::get('/home/pages/customers/create', [App\Http\Controllers\CustomerController::class, 'create'])->name('customers.create');
Route::post('/home/pages/customers/store', [App\Http\Controllers\CustomerController::class, 'store'])->name('customers.store');

