<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolsController extends Controller
{
    public function index(School $school)
    {
        return view('schools\index', compact('school'));
    }
}
