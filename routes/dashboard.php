<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    Route::get('dashboard', [PostController::class, 'DashboardIndex'])->name('admin.dashboard.index');
    
    Route::delete('post/{postId}/delete', [PostController::class, 'destroy'])->name('posts.destroy');

    Route::put('post/{post}/edit', [PostController::class, 'update'])->name('EditPost');

    Route::post('posts', [PostController::class, 'store'])->name('posts.store');
});

