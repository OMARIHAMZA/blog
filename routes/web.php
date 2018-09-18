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
    return view('welcome', [
        'name' => 'Hamza'
    ]);
});

//Show All Tasks
Route::get('tasks', 'TasksController@index');
//Show a specific Task
Route::get('tasks/{task}', 'TasksController@showTask');

//Show all Posts
Route::get('posts/create', 'PostsController@create');
Route::get('posts', 'PostsController@index');
Route::get('posts/{post}', 'PostsController@show');
Route::post('posts', 'PostsController@store');

//Comments
Route::post('posts/{post}/comments', 'CommentsController@store');
