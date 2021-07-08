@extends('layouts.default')

@section('content')
<div class="container-fluid px-4 min-height">
    <!-- <h1 class="mt-4">Update Carrer</h1> -->
    <div class="row">
        <div class="col-lg-6">
            <h4 class="mt-4">Update Career</h4>
        </div>
        <!-- <div class="col-lg-6">
            <p id="alrt">{{ session('success') }}</p>
        </div> -->
    </div>
    <div class="card col-md-4 mb-4">
        <div class="card-body">
            <form method="POST"  action="{{ route('carrer_update') }}">
                @csrf
                
                <div class="form-group">
                    <!--<label for="ref_id" class=" col-form-label text-md-right">{{ __('ref_id') }}</label>-->
                    <div class="">
                    <input name="id" type="hidden" value="{{$carrer->id}}">
                        @error('ref_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <!--<label for="language_id" class=" col-form-label text-md-right">{{ __('language_id') }}</label>-->
                    <div class="">

                        @error('language_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="heading" class=" col-form-label text-md-right">{{ __('Job Title') }}</label>
                    <div class="">
                        <input id="job_title" type="text" class="form-control @error('job_title') is-invalid @enderror" name="job_title" value="{{$carrer->job_title}}" required autocomplete="heading" autofocus>

                        @error('heading')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="details" class=" col-form-label text-md-right">{{ __('Department Name') }}</label>
                    <div class="">
                        <input id="department_name" type="textarea" class="form-control @error('department_name') is-invalid @enderror" name="department_name" value="{{$carrer->department_name}}" required autocomplete="details" autofocus>

                        @error('details')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="details" class=" col-form-label text-md-right">{{ __('Location Name') }}</label>
                    <div class="">
                        <input id="location_name" type="textarea" class="form-control @error('location_name') is-invalid @enderror" name="location_name" value="{{$carrer->location_name}}" required autocomplete="details" autofocus>

                        @error('details')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="details" class=" col-form-label text-md-right">{{ __('Experience') }}</label>
                    <div class="">
                        <input id="experience" type="textarea" class="form-control @error('experience') is-invalid @enderror" name="experience" value="{{$carrer->experience}}" required autocomplete="details" autofocus>

                        @error('details')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="details" class=" col-form-label text-md-right">{{ __('Job Description') }}</label>
                    <div class="">
                        <input id="job_description" type="textarea" class="form-control @error('job_description') is-invalid @enderror" name="job_description" value="{{$carrer->job_description}}" required autocomplete="details" autofocus>

                        @error('details')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
               
                <!-- <div class="form-group">
                    <label for="published_on" class=" col-form-label text-md-right">{{ __('published_on') }}</label>
                    <div class="">
                        <input id="published_on" type="text" onfocus="(this.type='date')" class="form-control @error('published_on') is-invalid @enderror" name="published_on" value="" required autocomplete="published_on" autofocus>

                        @error('published_on')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div> -->
                <!-- <div class="form-group">
                    <label for="image" class=" col-form-label text-md-right">{{ __('Image') }}</label>
                    <div class="">
                    <input id="eimage" value="" type="hidden" class="form-control @error('eimage') is-invalid @enderror" name="eimage" required autocomplete="id" autofocus>
                    <img alt="" width="100" height="70" src="storage/app/public/images/news/"></img>
                        <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value=""  autocomplete="image" autofocus>

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div> -->
                
                        
                            <p>No data found</p>
                        
                        
                        
                       

                
               

                <div class="form-group mt-4 mb-0">
                    
                   
                        <button class="btn btn-primary">Update carrer</button>
                   
                </div>
            </form>

        </div>
    </div>
</div>

@endsection
