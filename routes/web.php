<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministratorsController;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\SportsController;
use App\Http\Controllers\UsersController;

Route::get('/', function(){
    return view('registroDatos');
});


Route::get('/', [UsersController::class,'index'])-> name('users.index');
Route::post('/users', [UsersController::class, 'store'])->name('users.store');
Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{id}', [UsersController::class, 'update'])->name('users.update');
Route::get('/users_edit/{id}', [UsersController::class, 'edit'])->name('users.edit');


