@extends('layouts.master')

@section('title', 'FAST Dashboard')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-danger-800">List of Products</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fa-sm text-white-50"></i>Add New Product</a>
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
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>         
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>07/24/2022</td>
                            <td>Battery</td>
                            <td>250.00</td>
                            <td>Active</td>
                            <td>
                                <center>
                                    <a href="" class="btn btn-sm btn-success">Edit</a>
                                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>07/25/2022</td>
                            <td>Spark Plugs</td>
                            <td>150.00</td>
                            <td>Active</td>
                            <td>
                                <center>
                                    <a href="" class="btn btn-sm btn-success">Edit</a>
                                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                                </center>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection