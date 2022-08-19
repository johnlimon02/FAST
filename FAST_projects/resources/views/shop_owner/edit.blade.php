@extends('layouts.shopowner')

@section('title', 'FAST Edit Services')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            
            <br>
            <div class="card">
                <div class="card-header">
                    <h4>Edit Service
                        <a href = "{{ url ('shop_owner/services') }}" class = "btn btn-sm btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    
                    <form action="{{ url ('shop_owner/update-service/'.$key) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label>Service Name</label>
                            <input type="text" name="service_name" value="{{ $editdata['sname'] }}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label>Date Created</label>
                            <input type="date" name="date_created" value="{{ $editdata['dcreated'] }}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label>Price</label>
                            <input type="number" name="price" value="{{ $editdata['price'] }}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <center><button type="submit" class="btn btn-primary">Update</button></center>
                        </div>
                    </form>
                    
                </div>

            </div>
        </div>
    </div>
</div>

    <!-- Add Services Modal -->
    <!--<div class="modal fade" id="addservicemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog modal-dialog-scrollable" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Services</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" >
                    <form  
                        action="{{ url ('shop_owner/add-services') }}" 
                        method="post" 
                        
                        style="width: 460px;">
                        <center><img src="img/enrollment.png" width="120px"></center>

                        @csrf

                        <div class="mb-3">
                            <label style="font-size: 15px;">Service Name</label>
                            <input type="text" class="form-control" name="service_name" id="name" required>
                        </div>

                        <div class="mb-3">
                            <label style="font-size: 15px;">Price</label>
                            <input type="number" class="form-control" name="price" id="price" required> 
                        </div>

                        <div class="mb-1">
                            <label>Status</label>
                        </div>
                        <select class="form-select mb-3"
                                name="status" 
                                aria-label="Default select example">
                            <option selected value="user">Active</option>
                            <option value="admin">Inactive</option>
                        </select>

                        <center><button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Login</center> 
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>-->

@endsection