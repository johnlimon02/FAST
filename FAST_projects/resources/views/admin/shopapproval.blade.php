@extends('layouts.admin')


@section('title', 'FAST Shop Approval')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-danger-800">List of Shop Owner</h1>
        <a href="{{ url ('admin/shopapprove') }}"></a>
    </div>
    <!-- End Page Heading -->

    <!-- DataTables  -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Shop Name</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Latitude</th>
                            <th>Longtitude</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                   
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection