<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomsController extends Controller
{
    public function index(Classroom $classroom)
    {
        return view('home', compact('classroom'));
    }
}
