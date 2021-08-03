<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomsController extends Controller
{
    public function index($classroom)
    {
        $classroom = Classroom::find($classroom);

        return view('home', [
            'classroom' => $classroom,
        ]);
    }
}
