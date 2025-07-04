<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

// get method for default route "/"
// run the index method from TodoController
// this route is named todos.index that can be used in blade 
Route::get('/', [TodoController::class, 'index'])->name('todos.index');

// get method for /todos/create
// run the create method from TodoController
// shows the form 
Route::get('/todos/create', [TodoController::class, 'create'])->name('todos.create');

// Following REST:
// All creation happens via POST /todos.
// All updates happen via PUT /todos/{id}.
// All deletions happen via DELETE /todos/{id}.

// this route is called when create todo is submitted
// runs the store method in the TodoController
// stores new todo value 
Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');

// gets the item to be edited by its id
// shows the edit form for a specific todo
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'])->name('todos.edit');

// saves the updated item 
// triggered when edit form is submitted
Route::put('/todos/{todo}', [TodoController::class, 'update'])->name('todos.update');

// deletes an todo item by its id
Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');
