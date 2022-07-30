@extends('layouts.master')

@section('title', 'FAST Services')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-danger-800">List of Services</h1>
            <a href="{{ url ('shop_owner/add-services') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fa-sm text-white-50"></i>Add New Service</a>
    </div>
    <!-- End Page Heading -->


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date Created</th>
                                <th>Service Name</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th> 
                            </tr>
                        </thead>
                        
                    </table>
                </div>
            </div>
        </div>

</div>
<!-- /.container-fluid -->
@endsection