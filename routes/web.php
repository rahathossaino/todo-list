<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;



Route::resources(['tasks'=>TaskController::class]);
Route::get('/tasks/status/{id}',[TaskController::class,'status'])->name('tasks.status');
