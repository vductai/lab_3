<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


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

Route::get('/', [BookController::class, 'listbook'])->name('book.list');
Route::get('/create', [BookController::class, 'ins'])->name('book.ins');
Route::post('/create', [BookController::class, 'add'])->name('book.add');
Route::get('/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
Route::put('/edit/{id}', [BookController::class, 'update'])->name('book.update');
Route::delete('/delete/{id}', [BookController::class, 'delete'])->name('book.delete');
