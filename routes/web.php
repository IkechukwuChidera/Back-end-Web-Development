<?php

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


Route::get('/about',function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/course', function () {
    return view('course');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/single-blog', function () {
    return view('single-blog');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('create','PostController');
// Route::get('index','PostController');
// Route::get('edit','PostController');
// Route::get('destroy','PostController');
Route::resource('posts','PostController');
// Route::get('show','PostController');
