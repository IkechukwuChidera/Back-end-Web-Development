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
//Links assignment
Route::get('/', function () {
    return view('welcome');
});
//link 1
Route::get('/axis/victor/south', function () {
    return ('welcome');
});
//link 2
Route::get('/axis/victor/book', function () {
    return ('this is my homepage');
});
//link 3
Route::get('/axis/victor/book/textbook', function () {
    return ('what textbook do you want');
});
//link 4
Route::get('/axis/victor/book/textbook/chemistry', function () {
    return ('welcome to your chemistry textbook');
});
//link 5
Route::get('/axis/user/{uyu}', function () {
    return ('welcome to your chemistry textbook');
});


//Route:: get ('/axis/victor/{theman}', function($s) {
    //return $s;
//});

// Square root reactor
Route:: get ('/axis/victor/{is_integer}', function($n) {

   return sqrt ($n);
});
Route:: get ('/axis/victor/{is_integer}', function($n) {

    return  ($n*$n);
 });



//Array assignment

Route::get('/axis/cars/array', function () {
 return 
     $cars = ["benz","volvo","venza","ford","ferrari","honda","vboot","paragon","sequira","toyota"];

});
//personal practice
Route::get('/test', function () {
    return view ('test');
});

Route::get('/name', function () {
    return view ('test',['name'=> 'VICTOR IWUOHA']);
});

Route::get('/test', function () {
    return view ('test');
});
Route::get('/test2', function () {
    return view ('test2');
});
Route::get('/blog/home', function () {
    return view ('home');
});

//Assignment
Route::get('/blog/index', function () {
    return view ('index');
});
Route::get('/blog/archive', function () {
    return view ('archive');
});
Route::get('/blog/blog-details', function () {
    return view ('blog-details');
});
Route::get('/blog/category', function () {
    return view ('category');
});
Route::get('/blog/contact', function () {
    return view ('contact');
});
Route::get('/blog/elements', function () {
    return view ('elements');
});
Route::get('/blog/mail', function () {
    return view ('mail');
});

//routin array practice

Route::get('/blog', function () {
  $car= ['volvo', 'benz','honda'];
  
    return view ('blog', compact ('car'));
});

Route::get('/axis/pp/', function () {
    
    return view('pp');
});
Route::get('/axis/pp/{is_integer}', function () {
    
    return view('pp');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'TestController@test')->name('home');
            //nameofblade, nOFcontroller@method

Route::get('/classwork', 'TestController@elements')->name('home');
            //nameofblade, nOFcontroller@method

Route::get('/axis/multiply/{is_integer}', 'TestController@get')->name('home');

Route::get('/create', 'PostController@create')->name('home');

Route::post('/classpost', 'PostController@Store')->name('home');

Route::resource('posts', 'PostController');


