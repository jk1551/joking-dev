<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;

Route::get('/', function () {
    return view('home');
});

Route::get('blog', [BlogPostController::class, 'index'])->name('blog.index');
Route::get('blog/{blog}', [BlogPostController::class, 'show'])->name('blog.show');

Route::middleware(['auth'])->group(function () {
    Route::get('blog/create', [BlogPostController::class, 'create'])->name('blog.create');
    Route::post('blog', [BlogPostController::class, 'store'])->name('blog.store');
    Route::get('blog/{blog}/edit', [BlogPostController::class, 'edit'])->name('blog.edit');
    Route::put('blog/{blog}', [BlogPostController::class, 'update'])->name('blog.update');
    Route::delete('blog/{blog}', [BlogPostController::class, 'destroy'])->name('blog.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
