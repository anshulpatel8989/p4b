@extends('layouts.default')

@section('content')
<div class="container-fluid  px-4 min-height">
    <!-- <h1 class="mt-4">{{ __('Add new News') }}</h1> -->
    <div class="row">
        <div class="col-lg-6">
            <h4 class="mt-4">{{ __('Add New News') }}</h4>
        </div>
        <!-- <div class="col-lg-6">
            <p id="alrt">{{ session('success') }}</p>
        </div> -->
    </div>

    <div class="card  col-md-4">
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('news_create') }}">
                @csrf
                <div class="form-group">
                    <!--<label for="ref_id" class=" col-form-label text-md-right">{{ __('ref_id') }}</label>-->
                    <div class="">
                        <input id="ref_id" type="hidden" value="1" class="form-control @error('ref_id') is-invalid @enderror" name="ref_id" value="{{ old('ref_id') }}"  autocomplete="ref_id" autofocus>

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
                        <input id="language_id" value="1" type="hidden" class="form-control @error('language_id') is-invalid @enderror" name="language_id" value="{{ old('language_id') }}" required autocomplete="language_id" autofocus>

                        @error('language_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="heading" class=" col-form-label text-md-right">{{ __('Heading') }}</label>
                    <div class="">
                        <input id="heading" type="text" class="form-control @error('heading') is-invalid @enderror" name="heading" value="{{ old('heading') }}" required autocomplete="heading" autofocus>

                        @error('heading')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="details" class=" col-form-label text-md-right">{{ __('Details') }}</label>
                    <div class="">
                        <input id="details" type="textarea" class="form-control @error('details') is-invalid @enderror" name="details" value="{{ old('details') }}" required autocomplete="details" autofocus>

                        @error('details')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="is_published" class=" col-form-label text-md-right">{{ __('Publish') }}</label>
                    <div class="">
                        <input id="is_published" value="1" type="checkbox" class="form-control @error('is_published') is-invalid @enderror" name="is_published" value="{{ old('is_published') }}"  autocomplete="is_published" autofocus>

                        @error('is_published')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="published_on" class=" col-form-label text-md-right">{{ __('published_on') }}</label>
                    <div class="">
                        <input id="published_on" type="date" class="form-control @error('published_on') is-invalid @enderror" name="published_on" value="{{ old('published_on') }}" required autocomplete="published_on" autofocus>

                        @error('published_on')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="image" class=" col-form-label text-md-right">{{ __('Image') }}</label>
                    <div class="">
                        <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}"  autocomplete="image" autofocus>

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                 
                        
                       

                
               

                <div class="form-group mt-4 mb-0">
                    
                   
                        <button class="btn btn-primary">Add News</button>
                   
                </div>
            </form>

        </div>
    </div>
</div>

@endsection
