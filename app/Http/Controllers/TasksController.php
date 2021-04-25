<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks_unconfirmed = Task::where('status', true)->get();

        $tasks_confirmed = Task::where('status', false)->get();

        return view('tasks.index', ['tasks_unconfirmed' => $tasks_unconfirmed, 'tasks_confirmed' => $tasks_confirmed]);
    }

    public function show($id)
    {
        $task = Task::find($id);

        if ($task) {
            return view('tasks.show', ['task' => $task]);
        }

        return redirect()->route('tasks.index');
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'description' => ['max:255'],
        ]);

        $validatedData['status'] = 1;

        $task = Task::create($validatedData);

        return redirect()->route('tasks.show', $task->id);
    }

    public function edit($id)
    {
        $task = Task::find($id);

        if ($task) {
            return view('tasks.edit', ['task' => $task]);
        }

        return redirect()->route('tasks.index');
    }

    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'description' => ['max:255'],
        ]);
        $task = Task::find($id);

        if ($task) {
            $task->update($request->all());
            return redirect()->route('tasks.show', $task->id);
        }

        return redirect()->route('tasks.index');
    }

    public function confirm($id)
    {
        $task = Task::find($id);

        if ($task) {
            $task->update(['status' => '0']);
        }

        return redirect()->route('tasks.index');
    }

    public function unconfirm($id)
    {
        $task = Task::find($id);

        if ($task) {
            $task->update(['status' => '1']);
        }

        return redirect()->route('tasks.index');
    }


    public function delete($id)
    {
        $task = Task::find($id);

        if ($task) {

            $task->delete();
        }

        return redirect()->route('tasks.index');
    }
}
