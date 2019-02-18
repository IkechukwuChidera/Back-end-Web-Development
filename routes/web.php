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

//Link1 return text
Route::get('/axis/north', function () {
    return "This is the first Assignment";
});

//Link2 return text
Route::get('/axis/north/segun', function () {
    return "Thank you Sir Segun";
});

//Squareroot calculator via url
Route::get('/axis/north/{is_integer}', function($h) {
    return sqrt($h);
});


//To display Arrays
Route::get('/axis/south/array', function () {
    return $food=["Cassave","Millet","Yam","Beans","Rice","Cocoyam"];
});

//resources-view
Route::get('/blog/home', function () {
    return view('home');
});
//my blog templates
Route::get('/blog/index', function () {
    return view('index');
});

Route::get('/blog/left-sidebar', function () {
    return view('left-sidebar');
});

Route::get('/blog/right-sidebar', function () {
    return view('right-sidebar');
});

Route::get('/blog/no-sidebar', function () {
    return view('no-sidebar');
});

//using array@foreach
Route::get('/class', function () {

  $all=['bag','chair','book','chalk','marker'];
    return view('class', compact('all'));
});
