@extends('layouts.default')

@section('content')
 <div class="container-fluid  px-4 min-height">
    <!-- <h1 class="mt-4">{{ __('Dashboard') }}</h1> -->
    <div class="row">
        <div class="col-lg-6">
            <h4 class="mt-4">{{ __('Dashboard') }}</h4>
        </div>
        <!-- <div class="col-lg-6">
            <p id="alrt">{{ session('success') }}</p>
        </div> -->
    </div>
                        <!-- <div class="row">
                            <div class="col-md-12"><h2 class="mt-4">Recently Added Courses</h2></div>
                            @forelse ($course as $course_data)
                            <div class="col-xl-3 col-md-6 pull-right">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h4>{{$course_data->heading}}</h4>
                                        <p>Start Date: {{$course_data->start_date? date_format(date_create($course_data->start_date),"d/m/Y" ): ''}}</p>
                                        <p><small>Instructure:{{$course_data->instructure}}</small></p>
                                    </div>                                  
                                </div>
                            </div>
                            @empty
                                <p>No Data Found</p>
                                @endforelse
                        </div> -->

                        <div class="row">
                            <div class="col-md-12"><h5 class="mt-4">Recently Added News</h5></div>
                            @forelse ($news as $news_data)
                            <div class="col-xl-3 col-md-6 pull-right">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h4>{{$news_data->heading}}</h4>
                                        <p><small>Published on: {{$news_data->published_on? date_format(date_create($news_data->published_on),"d/m/Y" ): ''}}</small></p>
                                    </div>                                  
                                </div>
                            </div>
                            @empty
                            <p>No data found</p>
                            @endforelse
                        </div>
<!-- 
                        <div class="row">
                            <div class="col-md-12"><h2 class="mt-4">Recently Added Projects</h2></div>
                            @forelse ($project as $project_data)
                            <div class="col-xl-3 col-md-6 pull-right">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h4>{{$project_data->name}}</h4>
                                        <p>Client:{{$project_data->clientname}}</p>
                                        <p><small>Duration: {{$project_data->duration}} Days</small></p>
                                    </div>                                  
                                </div>
                            </div>
                            @empty
                            <p>No data found</p>
                            @endforelse
                        </div> -->

                    </div>
               

@endsection
