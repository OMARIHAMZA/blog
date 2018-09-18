<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        //    $tasks = DB::table('tasks')->get();
        $tasks = Task::all();
        return view('tasks.index')->with("tasks", $tasks);
    }

    public function showTask(Task $task)
    {
//    $task = DB::table('tasks')->find($id);
        return view('tasks.show')->with('task', $task);
    }
}
