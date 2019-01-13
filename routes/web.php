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

Route::get('/tasks', function () {
    $tasks = Task::latest() // latest() is for descending order
                     ->get();  // get() is for fetching the records

    // return $tasks; // this returns JASON format
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{id}', function ($id) {
    $task = Task::find($id); // find() is to search in database

    // return $tasks; // this returns JASON format
    return view('tasks.show', compact('task'));
});

