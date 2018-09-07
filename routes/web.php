<?php

// Route::get('/', 'HomeController@index');
Route::get('/', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');

Route::get('/about', 'AboutController@index');

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');
