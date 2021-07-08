@extends('layouts.default')

@section('content')
<div class="container-fluid px-4 min-height">
    <!-- <h1 class="mt-4">{{ __('Add new user') }}</h1> -->
    <div class="row">
        <div class="col-lg-6">
            <h4 class="mt-4">{{ __('Add new user') }}</h4>
        </div>
        <!-- <div class="col-lg-6">
            <p id="alrt">{{ session('success') }}</p>
        </div> -->
    </div>
    <div class="card col-md-4 mb-4">
        <div class="card-body">
            <form method="POST" action="{{ route('user_create') }}">
                @csrf
                <div class="form-group">
                    <label for="first_name" class=" col-form-label text-md-right">{{ __('First Name') }}</label>
                    <div class="">
                        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="name" autofocus>

                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                 <div class="form-group ">
                            <label for="last_name" class=" col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                
                <div class="form-group ">
                            <label for="email" class=" col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group ">
                            <label for="country_code" class=" col-form-label text-md-right">{{ __('country_code') }}</label>

                            <div class="">
                                <select required id="country_code" name="country_code" class="form-control @error('country_code') is-invalid @enderror" required="">
                                    <option value="0">Select country code</option>
                                    <option value="249">+249</option>
                                </select>
                                

                                @error('country_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $country_code }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group ">
                            <label for="mobile" class=" col-form-label text-md-right">{{ __('Mobile') }}</label>

                            <div class="">
                                <input id="name" type="text" class="form-control @error('mobile') is-invalid @enderror" maxlength="10" minlength="10" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password" class=" col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                
               

                <div class="form-group mt-4 mb-0">
                    
                   
                        <button class="btn btn-primary">Add User</button>
                   
                </div>
            </form>

        </div>
    </div>
</div>

@endsection
