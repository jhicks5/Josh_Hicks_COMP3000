<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
    Route::group(['middleware' => ['auth', 'admin']], function() {
        Route::get('/class/create', 'App\Http\Controllers\ClassroomsController@create');
        Route::post('/class', 'App\Http\Controllers\ClassroomsController@store');
        Route::get('/admin/students', [App\Http\Controllers\AdminController::class, 'getStudents'])->name('students.show');
        Route::get('/admin/teachers', [App\Http\Controllers\AdminController::class, 'getTeachers'])->name('teachers.show');
        Route::get('/admin/admins', [App\Http\Controllers\AdminController::class, 'getAdmins'])->name('admins.show');
        Route::get('/admin/classes', [App\Http\Controllers\AdminController::class, 'getClasses'])->name('classes.show');
    });

    Route::group(['middleware' => ['auth', 'teacher']], function() {
        Route::get('/task/create', 'App\Http\Controllers\TasksController@create');
        Route::post('/task', 'App\Http\Controllers\TasksController@store');
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', function()
        {
            if(Auth::user()-> role == 0){
                return redirect('/admin/students');
            }else {
                $school = Auth::user()->school_id;
                return redirect('/school/' . $school);
            }

        });
        Route::get('/task/{task}', 'App\Http\Controllers\TasksController@show');


        Route::get('/school/{school}', [App\Http\Controllers\SchoolsController::class, 'index'])->name('school.show');
        Route::get('/classroom/{classroom}', [App\Http\Controllers\ClassroomsController::class, 'index'])->name('classroom.show');
    });















