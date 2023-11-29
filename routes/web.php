<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdministratorsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ApiController;
use App\Http\Middleware\Role;


Route::get('/', function(){
    return view('registroDatos');
});


Route::middleware(['auth','role:administrators'])->group(function(){
    Route::get('/administrators', [AdministratorsController::class,'index'])-> name('administrators.index');
    Route::post('/administrators', [AdministratorsController::class, 'store'])->name('administrators.store');
    Route::delete('/administrators/{id}', [AdministratorsController::class, 'destroy'])->name('administrators.destroy');
    Route::put('/administrators/{id}', [AdministratorsController::class, 'update'])->name('administrators.update');
    Route::get('/administrators_edit/{id}', [AdministratorsController::class, 'edit'])->name('administrators.edit');
});

Route::middleware(['auth','role:users'])->group(function(){
    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    Route::post('/users', [UsersController::class, 'store'])->name('users.store');
    Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('users.destroy');
    Route::put('/users/{id}', [UsersController::class, 'update'])->name('users.update');
    Route::get('/users_edit/{id}', [UsersController::class, 'edit'])->name('users.edit');
});


Route::middleware(['auth','role:obtener-datos'])->group(function(){
    Route::get('/obtener-datos', [ApiController::class, 'obtenerDatos']);
});

Route::middleware(['auth','role:get_users'])->group(function(){
    Route::get('/get_users', [UserController::class, 'get_users']);
});



Route::resource('/users', [UserController::class]);
Route::get('/download-pdf', [ApiController::class, 'generarPDF'])->name('descargar-pdf');
Route::get('/download-excel', [ApiController::class, 'generarExcel'])->name('descargar-excel');

