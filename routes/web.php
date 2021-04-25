<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TasksController;
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

Route::post('/tasks', [TasksController::class, 'store'])->name('tasks.store');

Route::get('/tasks', [TasksController::class, 'index'])->name('tasks.index');

Route::get('/', [PageController::class, 'index'])->name('page.index');

Route::get('/tasks/create', [TasksController::class, 'create'])->name('tasks.create');

Route::post('/tasks/{id}', [TasksController::class, 'update'])->name('tasks.update');

Route::get('/tasks/{id}/confirm', [TasksController::class, 'confirm'])->name('tasks.confirm');

Route::get('/tasks/{id}/unconfirm', [TasksController::class, 'unconfirm'])->name('tasks.unconfirm');

Route::get('/tasks/{id}', [TasksController::class, 'show'])->name('tasks.show');

Route::get('/tasks/{id}/edit', [TasksController::class, 'edit'])->name('tasks.edit');

Route::get('/tasks/{id}/delete', [TasksController::class, 'delete'])->name('tasks.destroy');
