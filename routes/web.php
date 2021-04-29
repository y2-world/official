<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

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
    return view('home');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/works', function () {
    return view('works');
});
Route::get('/radio', function () {
    return view('radio');
});
Route::get('/radio/form', function () {
    return view('comments/create');
});
Route::get('/music', function () {
    return view('music');
});
Route::get('/music/single', function () {
    return view('single');
});
Route::get('/music/album', function () {
    return view('album');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/confirm', function () {
    return view('confirm');
});

Route::resource('comments', 'CommentController');


