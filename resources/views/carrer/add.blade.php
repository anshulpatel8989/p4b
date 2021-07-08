@extends('layouts.default')

@section('content')
<div class="container-fluid px-4 min-height">
    <!-- <h1 class="mt-4">Add Career</h1> -->
    <div class="row">
        <div class="col-lg-6">
            <h4 class="mt-4">Add Career</h4>
        </div>
    </div>

    <div class="card col-md-4">
        <div class="card-body">
            <form method="POST"  action="{{ route('carrer_create') }}">
                @csrf
                <div class="form-group">
                </div>
                <div class="form-group">
                    <label for="heading" class=" col-form-label text-md-right">Career Name</label>
                    <div class="">
                        <input id="job_title" type="text" class="form-control @error('job_title') is-invalid @enderror" name="job_title" value="{{ old('job_title') }}" required autocomplete="heading" autofocus>

                    </div>
                </div>
                
                <div class="form-group">
                    <label for="details" class=" col-form-label text-md-right">Department Name</label>
                    <div class="">
                        <input id="department_name" type="textarea" class="form-control @error('department_name') is-invalid @enderror" name="department_name" value="{{ old('department_name') }}" required autocomplete="details" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="details" class=" col-form-label text-md-right">Location Name</label>
                    <div class="">
                        <input id="loc_name" type="textarea" class="form-control @error('department_name') is-invalid @enderror" name="loc_name" value="{{ old('loc_name') }}" required autocomplete="details" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="details" class=" col-form-label text-md-right">Experience</label>
                    <div class="">
                        <input id="experience" type="textarea" class="form-control @error('experience') is-invalid @enderror" name="experience" value="{{ old('experience') }}" required autocomplete="details" autofocus>
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="details" class=" col-form-label text-md-right">Job Description</label>
                    <div class="">
                        <input id="job_description" type="textarea" class="form-control @error('job_description') is-invalid @enderror" name="job_description" value="{{ old('job_description') }}" required autocomplete="details" autofocus>

                    </div>
                </div>
      
                <div class="form-group mt-4 mb-0">
                        <button class="btn btn-primary">Add Career</button>
                   
                </div>
            </form>

        </div>
    </div>
</div>

@endsection