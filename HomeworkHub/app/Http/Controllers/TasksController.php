<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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

        $this->create([
            'title' => $data['title'],
            'description' => $data['description'],
            'taskFile' => $filePath,
        ]);

        return redirect('/home');
    }
}
