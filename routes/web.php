<?php

use App\Http\Controllers\GenerarFacturaController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/imprimir', [GenerarFacturaController::class, 'imprimir'])->name('imprimir');

Route::get('/lista-facturas', [GenerarFacturaController::class, 'index'])->name('lista-facturas');

Route::get('/nueva-factura', [GenerarFacturaController::class, 'create'])->name('nueva-factura');

Route::get('/ejemplo', function () {
    return view('ejemplo');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
