<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;


class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $projects = Project::all();
        return view('project.index', compact('projects'));
    }

    public function create()
    {
        return view('project.create');
    }

    public function store(Request $request)
    {
        Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status,
            'created_by' => auth()->id(),

        ]);

        return redirect()->route('project.index')->with('message', 'Project Create Successfully.');
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('project.edit', compact('project'));
    }

    public function update_project(Request $request, $id)
    {
        $project = Project::find($id);
        $project->update([
            'title'  => $request->title,
            'description'  => $request->title,
            'start_date'  => $request->title,
            'end_date'  => $request->title,
            'status'  => $request->title,
            'update_by'  => auth()->id(),
        ]);

        return redirect()->route('project.index')->with('message', 'successfully updated.');
    }

}



