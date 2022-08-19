@extends('layouts.admin')


@section('title', 'FAST Admin Municipality')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    @if(session('status'))
        
        <h4 class="alert alert-warning mb-2">{{session('status')}}</h4>
    @endif

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-danger-800">List of Municipality</h1>
        <a href="{{ url ('admin/addmunicipality') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fa-sm text-white-50"></i>Add Municipality</a>
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
                            <th>Municipality Name</th>
                            <th>Date Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1; @endphp
                        @forelse ($municipality_table as $key => $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item['municipal_name'] }}</td>
                            <td>{{ $item['municipal_date'] }}</td>
                            <td>
                                <center>
                                    <a href="{{ url ('admin/editmunicipal/'.$key) }}" class="btn btn-sm btn-success">Edit</a>
                                    <a href="{{ url ('admin/delete-municipal/'.$key) }}" class="btn btn-sm btn-danger">Delete</a>
                                </center>
                            </td> 
                        </tr>

                        @empty
                        <tr>
                            <td colspan="4">No Record Found</td>
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