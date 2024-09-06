<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');;

Route::get('/', function () {
    return view('home');
})->name('home');;

Route::get('/about', function () {
    return view('about');
})->name('about');;

Route::get('/post', function () {
    return view('post');
})->name('post');

Route::get('/EditPost', function () {
    return view('admin.EditPost');
})->name('EditPost');

Route::get('/AddPost', function () {
    return view('admin.AddNewPost');
})->name('AddPost');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
