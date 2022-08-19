@extends('layouts.shopowner')

@section('title', 'FAST Feedback')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    @if(session('status'))
        
        <h4 class="alert alert-warning mb-2">{{session('status')}}</h4>
    @endif

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-danger-800">Feedback/Ratings</h1>
    </div>
    <!-- End Page Heading -->

</div>




@endsection