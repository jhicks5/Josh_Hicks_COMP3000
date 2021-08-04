<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/classroom/{classroom}', [App\Http\Controllers\ClassroomsController::class, 'index'])->name('classroom.show');

Route::get('/t/create', 'App\Http\Controllers\TasksController@create');

Route::get('/t/{task}', 'App\Http\Controllers\TasksController@show');

Route::post('/t', 'App\Http\Controllers\TasksController@store');
