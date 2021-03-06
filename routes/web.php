<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [
    HomeController::class, 'index'
])->name('home');


Route::resource('students', App\Http\Controllers\StudentsController::class);

Route::resource('posts', App\Http\Controllers\PostsController::class);

Route::post('/likes/like', [App\Http\Controllers\LikesController::class, 'like'])->name('likes.like');
Route::get('/likes/assess-like', [App\Http\Controllers\LikesController::class, 'assessLike'])->name('likes.assess-like');
Route::resource('likes', App\Http\Controllers\LikesController::class);

Route::resource('logs', App\Http\Controllers\LogsController::class);

Route::resource('enrollments', App\Http\Controllers\EnrollmentController::class);
