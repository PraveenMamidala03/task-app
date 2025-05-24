<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tasks;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;


Route::get('/', function () {
    $tasks = Tasks::latest()->paginate(10);
    return view('index', compact('tasks'));
})->name('tasks.index');
Route::view('/tasks/create', 'create')->name('tasks.create');
Route::post('/tasks', function (TaskRequest $request) {
    $task=Tasks::create($request->validated());
    return redirect()->route('tasks.show', ['task' => $task->id])->with('success', 'Task created successfully!');
})->name('tasks.store');
Route::put('/tasks/{task}', function (Tasks $task,TaskRequest $request) {
    $task->update($request->validated());
    return redirect()->route('tasks.show', ['task' => $task->id])->with('success', 'Task updated successfully!');
})->name('tasks.update');
Route::get('/tasks/{task}/edit', function (Tasks $task) {
    $task =  $task;
    return view('edit', compact('task'));
})->name('tasks.edit');
Route::get('/tasks/{task}', function (Tasks $task) {
    $task = $task;
    return view('show', compact('task'));
})->name('tasks.show');
Route::delete('/tasks/{task}', function (Tasks $task) {
    $task->delete();
    return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
})->name('tasks.destroy');
Route::put('/tasks/{task}/complete', function (Tasks $task) {
    $task->toggleCompleted();
    return redirect()->back()->with('success', 'Task marked as completed!');
})->name('tasks.toggle-complete');
