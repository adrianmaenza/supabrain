@extends('layouts.master')
@section('title', 'Login')
@section('content')

<div class="container">
    <div class="row">
        {{-- wrapper --}}
        <div class="col s12 white down-20">

            <div class="row">

                <div class="col l6 m8 s12 offset-l3 offset-m2 down-20">

                    <div class="card">
                        
                        <div class="card-content">
                            <span class="card-title">{{ __('Login') }}</span>
                            
                            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                @csrf
        
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="email" class="">{{ __('E-Mail Address') }}</label>
    
                                
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
        
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    
                                </div>
        
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    
                                </div>
        
                                <div class="row">
                                    <div class="input-field col s12">
                                        <p>
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <span>{{ __('Remember Me') }}</span>
                                            </label>
                                        </p>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="input-field col s12">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
        
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            </div>

        </div>
        {{-- end wrapper --}}
    </div>
</div>
@endsection
