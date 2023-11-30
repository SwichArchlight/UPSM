<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\ControllerSiswa::class, 'index'])->name('home');
Route::get('/tambah', [App\Http\Controllers\ControllerSiswa::class, 'tambah'])->name('tambah');
Route::post('/tambah/store', [App\Http\Controllers\ControllerSiswa::class, 'store'])->name('Store');
Route::get('/edit/{id}', 'App\Http\Controllers\ControllerSiswa@edit');
Route::patch('/edit/update/{id}','App\Http\Controllers\ControllerSiswa@update');
Route::get('delete/{id}','App\Http\Controllers\ControllerSiswa@delete');

