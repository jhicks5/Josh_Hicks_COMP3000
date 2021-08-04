<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index($task)
    {

    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store()
    {

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'taskFile' => '',
        ]);

        $filePath = request('taskFile')->store('uploads', 'public');

        auth()->user()->classroom->task()->create([
            'title' => $data['title'],
            'description' => $data['description'],
            'classroom_id' => auth()->user()->classroom->id,
            'taskFile' => $filePath,
        ]);


        return redirect('/classroom/' . auth()->user()->classroom->id);
    }

        public function show(\App\Models\Task $task)
        {
            return view('tasks.show', compact('task'));
        }

}
