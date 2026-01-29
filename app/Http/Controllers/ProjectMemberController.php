<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Models\ProjectMember;

class ProjectMemberController extends Controller
{
    public function add_project_member($project_id)
    {
        $project = Project::findOrFail($project_id);
        $user = User::all();
        $project_members = ProjectMember::where('project_id', $project_id)->get();
        return view('projectMember.add',compact('project_id','project', 'user', 'project_members'));
    }
}
