<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('show', [LibrosController::class, 'show'])->name('show');

Route::get('create', [LibrosController::class, 'create'])->name('create');
Route::post('create', [LibrosController::class, 'store'])->name('store');

Route::get('edit/{id}', [LibrosController::class, 'edit'])->name('edit');
Route::put('update/{id}', [LibrosController::class, 'update'])->name('update');

Route::delete('delete/{id}', [LibrosController::class, 'delete'])->name('delete');


use App\Http\Controllers\LoginController;

Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('libros', [LibrosController::class, 'index'])->middleware('auth');
