<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdministratorsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ApiController;


Route::get('/', function(){
    return view('registroDatos');
});


Route::get('/', [UsersController::class,'index'])-> name('users.index');
Route::post('/users', [UsersController::class, 'store'])->name('users.store');
Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{id}', [UsersController::class, 'update'])->name('users.update');
Route::get('/users_edit/{id}', [UsersController::class, 'edit'])->name('users.edit');

Route::get('/', [AdministratorsController::class,'index'])-> name('administrators.index');
Route::put('/administrators/{id}', [AdministratorsController::class, 'update'])->name('administrators.update');
Route::get('/administrators_edit/{id}', [AdministratorsController::class, 'edit'])->name('administrators.edit');


Route::get('/obtener-datos', [ApiController::class, 'obtenerDatos']);

Route::get('/get_users', [UserController::class, 'getUsers']);

