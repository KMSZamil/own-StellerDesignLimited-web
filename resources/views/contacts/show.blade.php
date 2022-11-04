@extends('layouts.master')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
@endpush

@section('page_title')
    ContactUs Show
@endsection

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('contacts.index') }}">ContactUs</a></li>
            <li class="breadcrumb-item active" aria-current="page">ContactUs Show</li>
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
                    <h6 class="card-title">ContactUs Form</h6>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name"
                                    value="{{ $contactus->name }}" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email"
                                    value="{{ $contactus->email }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Mobile</label>
                                <input type="text" class="form-control" name="mobile" id="mobile"
                                    value="{{ $contactus->mobile }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Subject</label>
                                <textarea class="form-control" name="subject" rows="5" readonly>{{ $contactus->subject }}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Message</label>
                                <textarea class="form-control" name="message" rows="5" readonly>{{ $contactus->message }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Status</label>
                                <select class="form-control mb-3" name="active" required disabled="disabled">
                                    <option value="Y"
                                        {{ isset($contactus->active) && $contactus->active == 'Y' ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="N"
                                        {{ isset($contactus->active) && $contactus->active == 'N' ? 'selected' : '' }}>
                                        In-Active</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('contacts.index') }}"><button type="submit"
                            class="btn btn-primary submit">Back</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush
