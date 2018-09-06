<?php
use App\Task;

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

    $tasks = DB::table('tasks')->get();

    return view('welcome', compact('tasks'));

    /*
    ...or
        return view('welcome')->with('name','Simon');

    ...or
        $name = "Simon";
        $age = 21;
        return view('welcome', compact('name', 'age'));
    */
});


Route::get('/about', function(){
    return view('about');
});


Route::get('/tasks', function () {

    // $tasks = DB::table('tasks')->get();
    // $tasks = App\Task::all();
    $tasks = Task::all();

    return view('tasks.index', compact('tasks'));
});


Route::get('/tasks/{task}', function($id){

    // $task = DB::table('tasks')->find($id);
    // $task = App\Task::find($id);
    $task = Task::find($id);

    return view('tasks.show', compact('task'));
});
