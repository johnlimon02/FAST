@extends('layouts.shopowner')

@section('title', 'FAST Products')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    @if(session('status'))
        
        <h4 class="alert alert-warning mb-2">{{session('status')}}</h4>
    @endif

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-danger-800">List of Products</h1>
        <a href="{{ url ('shop_owner/add-products') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
                            <th>Image</th>
                            <th>Date Created</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Action</th>         
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1; @endphp
                        @forelse ($product_table as $key => $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td><img src = "{{ $item['images'] }}"</td>
                            <td>{{ $item['date_created'] }}</td>
                            <td>{{ $item['product_name'] }}</td>
                            <td>{{ $item['price'] }}</td>
                            <td>
                                <center>
                                    <a href="{{ url ('shop_owner/edit-products/'.$key) }}" class="btn btn-sm btn-success">Edit</a>
                                    <a href="{{ url ('shop_owner/delete-products/'.$key) }}" class="btn btn-sm btn-danger">Delete</a>
                                </center>
                            </td> 
                        </tr>

                        @empty
                        <tr>
                            <td colspan="6">No Record Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection