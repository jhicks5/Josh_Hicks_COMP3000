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

//    public function show(User $users)
//    {
//        return view('users.show', compact('users'));
//    }

    public function getUsers(){
        $users = User::all();
        return view('admin\users', ['users' => $users]);
    }

}
