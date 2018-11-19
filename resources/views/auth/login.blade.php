@extends('main.app')
@section('headSection')
<style>
    #background{
        background-image:url('/images/backgrounds/back5.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center; 
    }
</style>
@endsection
@section('content')
<div id="background">
    <div class="container" style="padding-bottom:200px; padding-top:200px;">
        <div class="row justify-content-center">
            <div class="col-md-8" style="background-color: #f2f2f2; padding-bottom:50px; padding-top:50px;">
                <div class="card">
                    {{-- <div class="card-header">{{ __('Login') }}</div> --}}
                    <h2>Login</h2>
                    <div class="card-body" style="padding-bottom:5px; padding-top:5px;">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row" style="padding-left:50px;">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row" style="padding-left:50px;">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row" style="padding-left:300px;">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember" name="">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0" style="padding-left:300px;">
                                <div class="col-md-8 offset-md-4">
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
</div>
@endsection
