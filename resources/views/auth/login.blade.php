@extends('layouts.app')

@section('content')


<form method="POST" action="{{ route('login') }}" class="form-signin">
    @csrf
    <a href="/" class="logo-container">
        <img class="mb-4" src="{{ asset('public/assets/images/logo.png')}}" alt="" height="72"/>
    </a>
    
    <h1 class="h3">Personal Login</h1>
    <label for="inputEmail" class="form-input">Email address</label>
    <input type="email" id="inputEmail" name="email" class="form-control" value="{{ old( 'email' ) }}" required="" autofocus=""/>
    @if( $errors->has( 'email' ) )
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first( 'email' ) }}</strong>
        </span>
    @endif
    <label for="inputPassword" class="form-input">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" required=""/>
    @if( $errors->has( 'password' ) )
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first( 'password' ) }}</strong>
        </span>
    @endif
    <div class="checkbox mb-3">
        <label>
        <input type="checkbox" value="remember-me" /> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p> Don't have the account? Please <a href="{{ route('register') }}">Sign Up</a> </p>
    <p class="mt-2 mb-3 text-muted">©Raplex.io 2019-2020</p>
</form>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
