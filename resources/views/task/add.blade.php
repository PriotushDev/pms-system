@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justif-content-center">
            <div class="col-md-8 mx-auto  bg-info-subtle py-3">
                <div class="card mb-3">
                    <div class="card-header">Project: {{$project->title}}</div>
                    <div class="card-body">
                        <p><strong>Descripion: </strong>{{$project->title}}</p>
                        <p><strong>start_date: </strong>{{$project->start_date}}</p>
                        <p><strong>end_date: </strong>{{$project->end_date}}</p>
                        <p><strong>status: </strong>{{$project->status}}</p>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Priority</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$task->title}}</td>
                                    <td>{{$task->description}}</td>
                                    <td>{{$task->priority}}</td>
                                    <td>{{$task->status}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card">
                    <p class="text-center text-red">{{session('message')}}</p>
                    <div class="card-header">{{__('Add Task')}}</div>
                    <div class="card-body">
                        <form action="{{route('task.store')}}" method="POST">
                            @csrf
                            <input type="hidden" name='project_id' value="{{$project_id}}">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Task name" required />
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control" name="description" placeholder="project description"  required />
                            </div>
                            <div class="mb-3">
                                <label for="start_date" class="form-label">Priority</label>
                                <select name="priority" id="priority" class="form-select" required>
                                    <option value="law">Law</option>
                                    <option value="medium">Medium</option>
                                    <option value="high">High</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="form-select" required>
                                    <option value="">--Select Status--</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Completed">Completed</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                
                                <input type="submit" class="btn btn-info" value="Create Task" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection