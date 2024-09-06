<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::prefix('admin')->group(function () {
    Route::get('dashboard', [PostController::class, 'DashboardIndex'])->name('admin.dashboard.index');
    
    Route::delete('post/{postId}/delete', [PostController::class, 'destroy'])->name('posts.destroy');

    // Custom route to show the form for editing a post
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

    // Custom route to update a post
    Route::put('post/{post}/edit', [PostController::class, 'update'])->name('EditPost');

    // Custom route to delete a post

    // Custom route to show the form for creating a new post
    Route::get('post/create', [PostController::class, 'create'])->name('posts.create');

    // Custom route to store a newly created post
    Route::post('posts', [PostController::class, 'store'])->name('posts.store');
});
