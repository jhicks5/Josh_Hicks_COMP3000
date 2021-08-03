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
//            'taskFile' => 'required',
        ]);
        dd(request()->all());
    }

}
