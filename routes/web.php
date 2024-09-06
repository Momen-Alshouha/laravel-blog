<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LoginController;

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

/*

This resource route definition automatically sets up routes for the common CRUD operations:

GET /posts - index
GET /posts/create - create
POST /posts - store
GET /posts/{post} - show
GET /posts/{post}/edit - edit
PUT/PATCH /posts/{post} - update
DELETE /posts/{post} - destroy

*/


// Custom route to display all posts
Route::get('/', [PostController::class, 'index'])->name('HomePosts');

// Custom route to display a single post
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');



Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');;


Route::get('/about', function () {
    return view('about');
})->name('about');;
