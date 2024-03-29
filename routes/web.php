<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/', [BookController::class, 'index'])->name('books');
Route::get('/books', [BookController::class, 'index'])->name('books');
Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
Route::get('/book/edit/{id}', [BookController::class, 'edit'])->name('book.edit');

Route::post('/book/update', [BookController::class, 'update'])->name('book.update');
Route::post('/book/store', [BookController::class, 'store'])->name('book.store');
Route::get('/users', [UserController::class, 'index'])->name('users');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
