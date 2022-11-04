@extends('layouts.master')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
@endpush

@section('page_title')
    Project Show
@endsection

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Project</a></li>
            <li class="breadcrumb-item active" aria-current="page">Project Show</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-sm-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="text-center">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Project Form</h6>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="{{ $project->name }}" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Portfolio</label>
                                <select class="form-control mb-3" name="portfolio_id" id="portfolio_id" required disabled="disabled">
                                    <option value="">Select</option>
                                    @foreach ($portfolio as $row)
                                        <option value="{{ $row->id }}"
                                            {{ isset($project->portfolio_id) && $project->portfolio_id == $row->id ? 'selected' : '' }}>
                                            {{ $row->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Project Url 1</label>
                                <input type="text" class="form-control" name="project_url_1" id="project_url_1" placeholder="Enter Project URL 1" value="{{ $project->project_url_1 }}" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Project Url 2</label>
                                <input type="text" class="form-control" name="project_url_2" id="project_url_2" placeholder="Enter Project URL 2" value="{{ $project->project_url_2 }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1">
                            <div class="form-group">
                                <label class="control-label">Image</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            @isset($project->image_path)
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <a href="{{ asset('storage/' . $project->image_path) }}" target="_blank">
                                            <img width="100" src="{{ asset('storage/' . $project->image_path) }}" />
                                        </a>
                                    </div>
                                </div>
                            @endisset
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Status</label>
                                <select class="form-control mb-3" name="active" required disabled="disabled">
                                    <option value="Y" {{ isset($project->active) && $project->active=='Y' ? "selected" : ""}}>Active</option>
                                    <option value="N" {{ isset($project->active) && $project->active=='N' ? "selected" : ""}}>In-Active</option>
                                </select>
                            </div>
                        </div>
                    </div>
                        <a href="{{ route('projects.index') }}"><button type="submit" class="btn btn-primary submit">Back</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush
