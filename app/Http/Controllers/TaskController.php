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
        $tasks=Task::all();
        return view('task.index',['tasks'=>$tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        $task=new Task();
        $task->title=$request->title;
        if(!empty($request->description)){
            $task->description=$request->description;
        }
        $task->save();
        return redirect()->route('tasks.index')
                         ->with('success', 'Task created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task=Task::find($id);
        if(empty($task)){
            return redirect()->back();
        }
        return view('task.show',['task'=>$task]);
    }

    /**
     * Show the form for editing the specified resource.
     */

     public function status(string $id)
    {
        $task=Task::find($id);
        $task->status=!$task->status;
        $task->save();
        return redirect()->back();
    }

    public function edit(string $id)
    {
        $task=Task::find($id);
        return view('task.edit',['task'=>$task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        $task=Task::find($id);
        $task->title=$request->title;
        if(!empty($request->description)){
            $task->description=$request->description;
        }
        $task->save();
        return redirect()->route('tasks.index')
                         ->with('success', 'Task updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task=Task::find($id);
        if(empty($task)){
            return redirect()->route('tasks.index')
                         ->with('error', 'Task doesnt exist.');
        }
        $task->delete();
        return redirect()->route('tasks.index')
                         ->with('success', 'Task deleted successfully.');
    }
}
