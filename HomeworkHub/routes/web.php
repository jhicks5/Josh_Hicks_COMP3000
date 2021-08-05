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

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function(){
        $school = Auth::user()->school_id;
        return redirect('/school/' . $school);});

//    Route::get('/logout', function(){
//        Auth::logout();
//        return Redirect::to('login');
//    });

    Route::get('/classroom/{classroom}', [App\Http\Controllers\ClassroomsController::class, 'index'])->name('classroom.show');

    Route::get('/admin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.show');

    Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'getUsers'])->name('users.show');

    Route::get('/admin/classes', [App\Http\Controllers\AdminController::class, 'getClasses'])->name('classes.show');

    Route::get('/school/{school}', [App\Http\Controllers\SchoolsController::class, 'index'])->name('school.show');

    Route::get('/task/create', 'App\Http\Controllers\TasksController@create');


    Route::get('/task/{task}', 'App\Http\Controllers\TasksController@show');

    Route::post('/task', 'App\Http\Controllers\TasksController@store');



});
