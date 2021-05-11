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

Route::get('/inventories', [App\Http\Controllers\InventoryController::class, 'index'])->name('inventories');
Route::get('/inventories/create', [App\Http\Controllers\InventoryController::class, 'create'])->name('inventories.create');
Route::post('/inventories/store', [App\Http\Controllers\InventoryController::class, 'store'])->name('inventories.store');
Route::post('/inventories/delete/{id}', [App\Http\Controllers\InventoryController::class, 'destroy'])->name('inventories.destroy');

Route::get('/transactions', [App\Http\Controllers\TransactionController::class, 'index'])->name('transactions');
Route::get('/transaction/create', [App\Http\Controllers\TransactionController::class, 'create'])->name('transactions.create');
Route::post('/transactions/store', [App\Http\Controllers\TransactionController::class, 'store'])->name('transactions.store');
Route::post('/transactions/delete/{id}', [App\Http\Controllers\TransactionController::class, 'destroy'])->name('transactions.destroy');