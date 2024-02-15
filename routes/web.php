<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/new-project', [App\Http\Controllers\ProjectController::class, 'new_project'])->name('new.project');
Route::post('/new-project', [App\Http\Controllers\ProjectController::class, 'store_project'])->name('store.project');
