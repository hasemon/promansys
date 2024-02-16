<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/new-project', [App\Http\Controllers\ProjectController::class, 'new_project'])->name('new.project');
Route::post('/new-project', [App\Http\Controllers\ProjectController::class, 'store_project'])->name('store.project');
Route::get('/list-project', [App\Http\Controllers\ProjectController::class, 'list_project'])->name('list.project');
Route::delete('/project/{id}', [App\Http\Controllers\ProjectController::class, 'delete_project'])->name('delete.project');



Route::get('/add-task/{id}', [App\Http\Controllers\TaskController::class, 'add_task'])->name('add.task');
Route::post('/add-task/{id}', [App\Http\Controllers\TaskController::class, 'store_task'])->name('store.task');
