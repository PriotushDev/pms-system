<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;
class TaskController extends Controller
{
    public function add_task($project_id)
    {
        $project = Project::findOrFail($project_id);
        $tasks = Task::where('project_id', $project_id)->get();
        return view('task.add', compact('project_id', 'project', 'tasks'));
    }

    public function store(Request $request)
    {
    Task::create([
            'project_id' => $request->project_id,
            'title' => $request->title,
            'description' => $request->description,
            'priority' => $request->priority,
            'status' => $request->status,
            'created_by' => auth()->id(),
        ]);

        return redirect()->back()->with('message', 'Task Created Successfully');
    }
}
