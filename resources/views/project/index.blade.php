@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justif-content-center">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">{{__('Project List')}}</div>
                    <div class="card-body">
                        <a href="{{route('project.create')}}" class="btn btn-primary mb-3">Create New Project</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Descripion</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th>Task Add</th>
                                    <th>Add Member</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projects as $project)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $project->title }}</td>
                                        <td>{{ $project->description }}</td>
                                        <td>{{ $project->start_date }}</td>
                                        <td>{{ $project->end_date }}</td>
                                        <td>{{ $project->status }}</td>
                                        <td>
                                            <a href="{{ route('task.add', $project->id) }}" class="btn btn-success btn-sm">Add Task</a>
                                        </td>
                                        <td>
                                            <a href="{{route('add.project.member', $project->id)}}" class="btn btn-info">Add Member</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection