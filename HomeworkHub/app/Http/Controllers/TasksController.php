<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
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

<<<<<<< HEAD
        $filePath = request('taskFile')->store('uploads', 'public');

        $this->create([
            'title' => $data['title'],
            'description' => $data['description'],
            'taskFile' => $filePath,
        ]);
=======
        \App\Models\Task::create($data);
>>>>>>> parent of 46cabcc (Protected create task route)

        return redirect('/home');
    }
}
