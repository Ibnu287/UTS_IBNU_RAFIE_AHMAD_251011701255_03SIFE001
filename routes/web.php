
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'home'])->name('home');

Route::get('/koleksi-buku', [BookController::class, 'index'])
    ->name('books.index');

Route::get('/tentang-kami', [BookController::class, 'about'])
    ->name('about');

Route::get('/books/{book}', [BookController::class, 'show'])
    ->name('books.show');
