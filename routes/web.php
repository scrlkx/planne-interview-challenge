<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
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

Route::get('/', HomeController::class)->name('home');

Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices');
Route::get('/invoices/create', [InvoiceController::class, 'create'])->name('invoices.create');
Route::post('/invoices/store', [InvoiceController::class, 'store'])->name('invoices.store');
Route::post('/invoices/{invoice}/delete', [InvoiceController::class, 'delete'])->name('invoices.delete');
