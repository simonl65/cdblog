<?php

Route::get('/',     'HomeController@index');

Route::get('/home', 'PostsController@index');

Route::get('/posts',        'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts',       'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/about',    'AboutController@index');

Route::get('/tasks',        'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');


Route::get('/register',     'RegistrationController@create');
Route::post('/register',    'RegistrationController@store');

Route::get('/login',    'SessionsController@create')->name('login');
Route::post('/login',   'SessionsController@store');
Route::get('/logout',   'SessionsController@destroy');
