<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministratorsController;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\SportsController;
use App\Http\Controllers\UsersController;

Route::get('/', function(){
    return view('registroDatos');
});


Route::get('/', [UsersController::class,'index'])-> name('authors.index');
Route::post('/authors', [UsersController::class, 'store'])->name('authors.store');
Route::delete('/authors/{id}', [UsersController::class, 'destroy'])->name('authors.destroy');
Route::put('/authors/{id}', [UsersController::class, 'update'])->name('authors.update');
Route::get('/authors_edit/{id}', [UsersController::class, 'edit'])->name('authors.edit');


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


// Route::get('/books', [UsersController::class, 'index'])->name('books.index');
// Route::post('/books', [UsersController::class, 'store'])->name('books.store');
// Route::delete('/books/{id}', [UsersController::class, 'destroy'])->name('books.destroy');
// Route::put('/books/{id}', [UsersController::class, 'update'])->name('books.update');
// Route::get('/books_edit/{id}', [UsersController::class, 'edit'])->name('books.edit');
