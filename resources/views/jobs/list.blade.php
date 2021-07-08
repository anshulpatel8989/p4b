@extends('layouts.default')

@section('content')
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"> -->
<div class="container-fluid  px-4 min-height">

    <div class="row">
        <div class="col-lg-6">
            <h4 class="mt-4">{{ __('News List') }}</h4>
        </div>
        <div class="col-lg-6">
            <p id="alrt">{{ session('success') }}</p>
        </div>
    </div>


    <!-- <h1 class="mt-4">{{ __('News List') }}</h1> -->
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
                <a href="{{ route('news_add') }}">
                    <button class="btn btn-primary mb-2">Add News</button>
                </a>
            </div>
            <div class="table-responsive">
               
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
<!--                            <th>Reference ID</th>
                            <th>Language ID</th>-->
                            <th>Heading</th>
                            <th>details</th>
                            <th>Is Published</th>
                            <th>Published On</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($news as $news_data)
                        <tr>
                            <td>{{$news_data->id}}</td>
<!--                        <td>{{$news_data->ref_id}}</td>
                        <td>{{$news_data->language_id}}</td>-->
                            <td>{{$news_data->heading}}</td>
                            <td>{{$news_data->details}}</td>
                            <td>{{$news_data->is_published?"Yes":"No"}}</td>
                            <td>{{$news_data->published_on? date_format(date_create($news_data->published_on),"d/m/Y" ): ''}}</td>
                            <td>
                                <img alt="<?php echo $news_data->image;?>" width="50" height="50" src="storage/app/public/images/news/<?php echo $news_data->image;?>" style="border-radius:50%; object-fit:center;"></td>
                         <td><a href='news_edit/{{$news_data->id}}'><i class="far fa-edit text-info"></i></a> 
                            <a href='news_delete/{{$news_data->id}}'><i class="far fa-trash-alt  text-danger"></i></a></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7"><center>No data found</center></td>
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
    $('#dataTable').DataTable({"order": [ 0, 'DESC' ]});
});
</script>   
<script>
     setTimeout(function() {document.getElementById('alrt').innerHTML='';},5000);
     </script>
@endsection
