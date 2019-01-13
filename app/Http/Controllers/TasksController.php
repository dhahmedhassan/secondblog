<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::latest() // latest() is for descending order
                     ->get();  // get() is for fetching the records

        // return $tasks; // this returns JASON format
        return view('tasks.index', compact('tasks'));
    }

    public function show($id)
    {
        $task = Task::find($id); // find() is to search in database

        // return $tasks; // this returns JASON format
        return view('tasks.show', compact('task'));
    }
}
