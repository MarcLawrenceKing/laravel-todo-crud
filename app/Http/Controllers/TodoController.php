<?php

namespace App\Http\Controllers;

use App\Models\Todo; // import todo model
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // get method, to show the landing page
    public function index()
    {
        // fetch all todos in db
        $todos = Todo::all();
        // loads the todos.index blade
        // passes the variable todos to the view
        return view('todos.index', compact('todos'));
    }

    // get method, this is the logic that shows the create form
    public function create()
    {
        // loads the todos.form blade 
        return view('todos.add');
    }

    // post method, the logic when a create form is submitted
    // takes parameter to save the blade form data
    public function store(Request $request)
    {
        // backend validation on incoming data before saving in the db
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'img_url' => 'nullable|url',
            'is_done' => 'nullable|boolean',
        ]);

        // add the validated data into the database
        // will only work if model has $fillable defined for the fields
        Todo::create($validated);

        // redirect to todo.index
        return redirect()->route('todos.index');
    }

    // get method, retrieves the todo that will be edited
    // parameter stores the id
    public function edit(Todo $todo)
    {
        // loads the todos.form blade
        // passes the existing todo so the html fields will be populated 
        return view('todos.edit', compact('todo'));
    }

    // put method, this updates the value in the database when edit is submitted
    // parameter todo holds the id being updated
    // parameter request holds the values being submitted
    public function update(Request $request, Todo $todo)
    {
        // validate the request values before saving changes
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'img_url' => 'nullable|url',
            'is_done' => 'nullable|boolean',
        ]);

        // update the validated data into the database
        $todo->update($validated);

        // redirect to todo.index
        return redirect()->route('todos.index');
    }

    // delete method, this is called when an item is deleted
    // takes the item id to be deleted
    public function destroy(Todo $todo)
    {
        // delete the stored id
        $todo->delete();

        // redirect to todo.index
        return redirect()->route('todos.index');
    }
}
