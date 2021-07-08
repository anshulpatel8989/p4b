@extends('layouts.default')

@section('content')
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"> -->
<div class="container-fluid  px-4 min-height">
    <!-- <h1 class="mt-4">{{ __('Career List') }}</h1> -->
    <div class="row">
        <div class="col-lg-6">
            <h4 class="mt-4">{{ __('Career List') }}</h4>
        </div>
        <div class="col-lg-6">
            <p id="alrt">{{ session('success') }}</p>
        </div>
    </div>

    <div class="card mb-4">
       <!-- <p id="alrt">
        {{ session('success') }}
        </p> -->
        <div class="card-body">
            @if(isset($status))               
            @if(($status)==1)
            <div class="alert alert-success">
                {{ $message }}  
            </div>
            @else
            <div class="alert alert-danger">
                {{ $message }}  
            </div>
            @endif <!--end of if status-->

            @endif 
            <!--end of if status-->
            <div style="text-align:right;">
                <a href="{{ route('carrer_add') }}">
                    <button class="btn btn-primary mb-2">Add Careers Data </button>
                </a>
            </div>
            <div class="table-responsive">
                
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Department Name</th>
                            <th>Location</th>
                            <th>Description</th>
                            <th>Experiance</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($carrer as $carrer_data)
                        <tr>
                            <td>{{$carrer_data->id}}</td>
                            <td>{{$carrer_data->job_title}}</td>
                            <td>{{$carrer_data->department_name}}</td>
                            <td>{{$carrer_data->location_name}}</td>
                            <td>{{$carrer_data->job_description}}</td>
                            <td>{{$carrer_data->experience}}</td>
                         <td><a href='carrer_edit/{{$carrer_data->id}}'><i class="far fa-edit text-info"></i></a>
                         <a href='car_delete/{{$carrer_data->id}}'><i class="far fa-trash-alt  text-danger"></i></a></td>

                        </tr>
                    
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<?php //var_dump($user); ?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script>

$(document).ready(function () {
    $('#dataTable').DataTable({"order": [ 0, 'DESC' ]});
});
</script>   
<script>
     setTimeout(function() {document.getElementById('alrt').innerHTML='';},5000);
     </script>
@endsection
