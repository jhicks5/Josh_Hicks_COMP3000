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
        dd(request()->all());
    }

}
