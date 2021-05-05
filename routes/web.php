<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
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

Route::get('/tasks', function () {
    $keyword = request()->get('keyword');
    $now = Carbon::now();
    $tasks = DB::table('tasks')
        ->where('name', 'like', "%$keyword%")
        ->whereDate('date_on', '<=', $now)
        ->get();
    return view('task.list', [
        'tasks' => $tasks
    ]);
});
Route::get('/tasks/new', function() {
    return view('task.new');
});
Route::get('/tasks/{taskId}', function() {
    return view('task.detail');
});
Route::get('/tasks/{taskId}/edit', function() {
    return view('task.edit');
});
