@extends('layouts.default')

@section('content')
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"> -->
<div class="container-fluid px-4 min-height">
    <!-- <h1 class="mt-4">{{ __('User List') }}</h1> -->
    <div class="row">
        <div class="col-lg-6">
            <h4 class="mt-4">{{ __('User List') }}</h4>
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
                <a href="{{ route('user_add') }}">
                    <button class="btn btn-primary mb-2">Add User</button>
                </a>
            </div>
            <div class="table-responsive">
                
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($user as $user_data)
                        <tr>
                            <td>{{$user_data->id}}</td>
                            <td>{{$user_data->first_name}}</td>
                            <td>{{$user_data->last_name}}</td>
                            <td>{{$user_data->email}}</td>
                            <td>{{$user_data->mobile}}</td>
                            <td><a href='user_edit/{{$user_data->id}}'><i class="fas fa-user-edit text-info"></i></a></td>
                        </tr>
                        @empty
                        <tr>
                            <td>No data found</td>
                        </tr>
                        @endforelse
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
    $('#dataTable').DataTable();
});
</script>   
<script>
     setTimeout(function() {document.getElementById('alrt').innerHTML='';},5000);
     </script>
@endsection
