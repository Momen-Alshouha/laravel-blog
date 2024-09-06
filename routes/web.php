<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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

Auth::routes();

require base_path('routes/dashboard.php');


Route::get('/', [PostController::class, 'index'])->name('HomePosts');

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');


// Routes for authenticated users only
Route::middleware('auth')->group(function () {
    Route::delete('/posts/{post}/comments/{comment}', [CommentController::class, 'destroy'])->name('post.comment.destroy');
    Route::post('/posts/{post}/comments', [CommentController::class, 'storeComment'])->name('post.comment.store');
    Route::put('/posts/{post}/comments/{comment}', [CommentController::class, 'update'])->name('post.comment.update');
});


Route::get('/about', function () {
    return view('about');
})->name('about');;
