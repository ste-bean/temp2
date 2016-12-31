<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::post('/signup',[
     'uses' => 'UserController@postSignUp',
	 'as' => 'signup'
]);
Route::post('/signin',[
     'uses' => 'UserController@postSignIn',
	 'as' => 'signin'
]);
Route::post('/createpost',[
     'uses' => 'PostController@postCreatePost',
	 'as' => 'post.create'
]);
Route::get('/dashboard', [
     'uses' => 'PostController@getDashboard',
	 'as' => 'dashboard',
	 'middleware' => 'auth'
]);
Route::get('/delete-post/{post_id}', [
     'uses' => 'PostController@getDeletePost',
	 'as' => 'post.delete',
	 'middleware' => 'auth'
]);



