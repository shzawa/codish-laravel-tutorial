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

Route::post('/tasks/new', function() {
    $payload = [
        'name' => request()->get('name'),
        'date_on' => request()->get('date_on'),
        'body' => request()->get('body'),
    ];
    $rules = [
        'name' => ['required'],
        'date_on' => ['required'],
        'body' => ['required'],
    ];

    $val = validator($payload, $rules);
    if ($val->fails()) {
        session()->flash('old_form', $payload);
        session()->flash('errors', $val->errors()->toArray());
        return redirect('/tasks/new');
    }

    DB::table('tasks')->insert($payload);
    return redirect('/tasks');
});

Route::get('/tasks/{id}', function($id) {
    $task = DB::table('tasks')->where('id', $id)->first();
    return view('task.detail', [
        'task' => $task
    ]);
});

Route::get('/tasks/{id}/edit', function() {
    return view('task.edit');
});
