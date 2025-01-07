<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = session('tasks', []);
        return view('welcome', ['tasks' => $tasks]);
    }

    public function addTask(Request $request)
    {
        $task = $request->input('task');
        $tasks = session('tasks', []);
        $tasks[] = $task;
        session(['tasks' => $tasks]);
        return redirect('/');
    }

    public function deleteTask(Request $request)
    {
        $taskIndex = $request->input('task_index');
        $tasks = session('tasks', []);
        unset($tasks[$taskIndex]);
        session(['tasks' => array_values($tasks)]);
        return redirect('/');
    }

    public function editTask(Request $request)
    {
        $taskIndex = $request->input('task_index');
        session(['edit_task_index' => $taskIndex]);
        return redirect('/');
    }

    public function saveTask(Request $request)
    {
        $taskIndex = $request->input('task_index');
        $tasks = session('tasks', []);
        $tasks[$taskIndex] = $request->input('task');
        session(['tasks' => $tasks]);
        session()->forget('edit_task_index');
        return redirect('/');
    }

    public function cancelEdit()
    {
        session()->forget('edit_task_index');
        return redirect('/');
    }
}