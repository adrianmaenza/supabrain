@extends('layouts.master')
@section('title', 'Reset Password')
@section('content')
<div class="container">
    <div class="row">

        <div class="col s12 white down-20">
            
            <div class="row">
                <div class="col s12 m8 l6 offset-m2 offset-l3 down-20">

                    <div class="card">
            
                        <div class="card-content">
                            <span class="card-title">{{ __('Reset Password') }}</span>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
        
                            <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                                @csrf
        
                                <div class="input-field row">
                                    
                                    <div class="col s12">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
        
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="input-field row mb-0">
                                    <div class="col s12">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Send Password Reset Link') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
