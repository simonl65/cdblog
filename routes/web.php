<?php

Route::get('/', 'HomeController@index');

Route::get('/about', 'AboytController@index');

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');
