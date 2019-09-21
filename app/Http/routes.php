<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "ABOUT";
});

Route::get('/contact', function () {
    return "CONTACT";
});

Route::get('post/{id}', function ($id) {
    return "This is post number " . $id;
});

Route::group(['middleware' => ['web']], function () {
    
});

// Route::get('/post/{name}/{id}/', 'PostsController@index');

Route::resource('/posts', 'PostsController');

Route::get('/contact', 'PostsController@contact');