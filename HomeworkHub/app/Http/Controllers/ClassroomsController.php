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

    public function show(Classroom $classrooms)
    {
        return view('classrooms.show', compact('classrooms'));
    }

    public function create()
    {
        return view('classrooms.create');
    }

    public function store()
    {
        $data = request()->validate([
            'school_id' => 'required',
            'classname' => 'required',
        ]);

        auth()->user()->classroom()->create([
            'school_id' => $data['school_id'],
            'classname' => $data['classname'],
        ]);

        return redirect('/admin/classes');
    }
}
