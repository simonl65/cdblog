<?php

Route::get('/',             'HomeController@index');

Route::get('/posts',        'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts',       'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/about',        'AboutController@index');

Route::get('/tasks',        'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');
