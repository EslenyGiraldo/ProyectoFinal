<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministratorsController;
// use App\Http\Controllers\CampusController;
// use App\Http\Controllers\SportsController;
use App\Http\Controllers\UsersController;




Route::get('/', [AdministratorsController::class,'index'])-> name('authors.index');
Route::post('/authors', [AdministratorsController::class, 'store'])->name('authors.store');
Route::delete('/authors/{id}', [AdministratorsController::class, 'destroy'])->name('authors.destroy');
Route::put('/authors/{id}', [AdministratorsController::class, 'update'])->name('authors.update');
Route::get('/authors_edit/{id}', [AdministratorsController::class, 'edit'])->name('authors.edit');


// Route::get('/books', [CampusController::class, 'index'])->name('books.index');
// Route::post('/books', [CampusController::class, 'store'])->name('books.store');
// Route::delete('/books/{id}', [CampusController::class, 'destroy'])->name('books.destroy');
// Route::put('/books/{id}', [CampusController::class, 'update'])->name('books.update');
// Route::get('/books_edit/{id}', [CampusController::class, 'edit'])->name('books.edit');

// Route::get('/', [SportsController::class,'index'])-> name('authors.index');
// Route::post('/authors', [SportsController::class, 'store'])->name('authors.store');
// Route::delete('/authors/{id}', [SportsController::class, 'destroy'])->name('authors.destroy');
// Route::put('/authors/{id}', [SportsController::class, 'update'])->name('authors.update');
// Route::get('/authors_edit/{id}', [SportsController::class, 'edit'])->name('authors.edit');


Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::post('/users', [UsersController::class, 'store'])->name('users.store');
Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{id}', [UsersController::class, 'update'])->name('users.update');
Route::get('/users_edit/{id}', [UsersController::class, 'edit'])->name('users.edit');
