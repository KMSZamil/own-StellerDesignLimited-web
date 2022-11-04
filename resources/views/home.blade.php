@extends('layouts.master')

@push('css')
    <link rel="stylesheet" href="{{asset('assets/vendors/toastr/toastr.min.css')}}">
@endpush

@section('page_title')
    Dashboard
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h5 class="card-title mb-0">Total Visitor</h5>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h5 class="mb-2 pt-3">{{ number_format($visitor_count) }}</h5>
                                    <div class="d-flex align-items-baseline">
                                        <p class="text-success">
                                            <span></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h5 class="card-title mb-0">Pending Contact Request</h5>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h5 class="mb-2 pt-3">{{ number_format($contact_request_pending) }}</h5>
                                    <div class="d-flex align-items-baseline">
                                        <p class="text-success">
                                            <span></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- row -->

@endsection

@push('js')
    <script src="{{ asset('assets/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('assets/vendors/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/vendors/toastr/toastr.min.js')}}"></script>
    {!! Toastr::message() !!}

@endpush
