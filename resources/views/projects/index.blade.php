@extends('layouts.master')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{asset('assets/vendors/toastr/toastr.min.css')}}">
@endpush

@section('page_title')
    Project
@endsection

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Project</a></li>
            <li class="breadcrumb-item active" aria-current="page">Project Table</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="text-right">
                        <a href="{{ route('projects.create') }}">
                            <button type="button" class="btn btn-primary mb-2 text-right">Create Project</button>
                        </a>
                    </div>
                    <h6 class="card-title">Project Table</h6>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Portfolio</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{asset('assets/vendors/toastr/toastr.min.js')}}"></script>
    {!! Toastr::message() !!}
    <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('js/datatable_custom.js') }}"></script>

    <script type="text/javascript">
        $(function() {
            var table = $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('projects.index') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'project_portfolio', name: 'project_portfolio'},
                    {data: 'name', name: 'name'},
                    {data: 'image_path', name: 'image_path'},
                    {data: 'status', name: 'status'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });

        });
    </script>
    <script>
        function deleteConfirmation(id) {
            swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then(function (e) {
                if (e.value === true) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        type: 'DELETE',
                        url: "{{ route('projects.destroy','_id') }}".replace('_id', id),
                        data: {_token: CSRF_TOKEN, id: id},
                        dataType: 'JSON',
                        success: function (results) {
                            //console.log(data); return false;
                            if (results.success === true) {
                                swal.fire("Successfully deleted", results.message, "success").then(function() {
                                    window.location = "{{ route('projects.index') }}";
                                });
                            } else {
                                swal.fire("Error!", results.message, "error");
                            }
                        },error: function(e) { console.log(e); }
                    });
                } else {
                    e.dismiss;
                }
            })
            // Swal.fire({
            //     title: 'Are you sure?',
            //     text: "You won't be able to revert this!",
            //     icon: 'warning',
            //     showCancelButton: true,
            //     confirmButtonColor: '#3085d6',
            //     cancelButtonColor: '#d33',
            //     confirmButtonText: 'Yes, delete it!'
            // }).then((result) => {
            //     if (result.isConfirmed) {
            //         Swal.fire(
            //             'Deleted!',
            //             'Your file has been deleted.',
            //             'success'
            //         )
            //     }
            // })
        }
    </script>
@endpush

