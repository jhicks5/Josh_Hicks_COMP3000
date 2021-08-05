<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Classroom;
use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(User $user)
    {
        return view('admin\home', compact('user'));
    }

    public function home(User $user)
    {
        return view('home', compact('user'));
    }

    public function getStudents()
    {
        $students = User::all()->where('role', '==', '1');
        return view('admin\students', ['students' => $students]);
    }

    public function getTeachers()
    {
        $teachers = User::all()->where('role', '==', '2');
        return view('admin\teachers', ['teachers' => $teachers]);
    }

    public function getClasses()
    {
        $classes = Classroom::all();
        return view('admin\classes', ['classes' => $classes]);
    }

    public function createStudent()
    {
        return view('admin.create.newstudent');
    }
}
