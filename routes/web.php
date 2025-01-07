<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index'])->name('tasks.index');

Route::post('add-task', [TaskController::class, 'addTask'])->name('add_task');
Route::post('delete-task', [TaskController::class, 'deleteTask'])->name('delete_task');
Route::post('edit-task', [TaskController::class, 'editTask'])->name('edit_task');
Route::post('save-task', [TaskController::class, 'saveTask'])->name('save_task');
Route::post('cancel-edit', [TaskController::class, 'cancelEdit'])->name('cancel_edit');