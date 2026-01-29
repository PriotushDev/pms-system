@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justif-content-center">
            <div class="col-md-8 mx-auto  bg-info-subtle py-3">
                <div class="card">
                    <p class="text-center text-red">{{session('message')}}</p>
                    <div class="card-header">{{__('Project List')}}</div>
                    <div class="card-body">
                        <form action="{{route('project.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="project name" required />
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control" name="description" placeholder="project description"  required />
                            </div>
                            <div class="mb-3">
                                <label for="start_date" class="form-label">Sart Date</label>
                                <input type="date" class="form-control" name="start_date" placeholder="project start date"  required />
                            </div>
                            <div class="mb-3">
                                <label for="end_date" class="form-label">End Date</label>
                                <input type="date" class="form-control" name="end_date" placeholder="project end date"  />
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
                                
                                <input type="submit" class="btn btn-info" value="Submit Data" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection