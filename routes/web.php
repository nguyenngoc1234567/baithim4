<?php

use App\Http\Controllers\BookController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::prefix('books')->group(function () {
    Route::get('/index', [BookController::class,'index'])->name('books.index');
    Route::get('/create', [BookController::class,'create'])->name('books.create');
    Route::post('/store', [BookController::class,'store'])->name('books.store');
    Route::get('/edit/{id}', [BookController::class,'edit'])->name('books.edit');
    Route::put('/update/{id}', [BookController::class,'update'])->name('books.update');
    Route::delete('/delete/{id}', [BookController::class,'delete'])->name('books.delete');
    Route::get('books/search', [BookController::class, 'search'])->name('books.search');
});
