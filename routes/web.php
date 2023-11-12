<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [PostController::class, 'index'])
    ->name('root');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('posts', PostController::class)
    ->only(['create', 'store', 'edit', 'update', 'destroy'])
    ->middleware('auth');

Route::resource('posts', PostController::class)
    ->only(['show', 'index']);

Route::resource('posts.comments', CommentController::class)
    ->only(['create', 'store', 'edit', 'update', 'destroy'])
    ->middleware('auth');

Route::get('/cash/credit', function () {
    return view('cash.credit');
})->name('cash.credit');

Route::get('/cash/sorry', function () {
    return view('cash.sorry');
})->name('cash.sorry');

Route::get('/cash/index', function () {
    return view('cash.index');
})->name('cash.index');

Route::get('/cash/menu', function () {
    return view('cash.menu');
})->name('cash.menu');

require __DIR__ . '/auth.php';
