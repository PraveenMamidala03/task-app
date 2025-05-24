<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tasks;
use Illuminate\Http\Request;
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
    $tasks = Tasks::all();
    return view('index', compact('tasks'));
});

Route::get('/tasks/{id}', function ($id) {
    $task = Tasks::findOrFail($id);
    return view('show', compact('task'));
})->name('tasks.show');
