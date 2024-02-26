<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view('index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('AddTask');
    }

    public function store(Request $request)
    {
        Task::create([
            'name' => $request->name,
        ]);
        return redirect('/AddTask');
    
    }

    public function show(string $id)
    {
        return view('ListTask');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::find($id);

        return view('edit_user')->with([
            'task'=>$task
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::find($request->$id);
        $task->update([
            'name'=>$request->name 
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Task::find($id)->delete();
      




        
        return redirect('/tasks')->with('success', 'Task deleted successfully');
        
    }
}
