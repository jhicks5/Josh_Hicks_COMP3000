<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomsController extends Controller
{
    public function index(Classroom $classroom)
    {
        return view('classrooms\index', compact('classroom'));
    }

    public function home(Classroom $classroom)
    {
        return view('home', compact('classroom'));
    }

    public function show(\App\Models\Classroom $classrooms)
    {
        return view('classrooms.show', compact('classrooms'));
    }
}
