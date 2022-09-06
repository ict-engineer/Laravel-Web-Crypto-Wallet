@extends('layouts.app')

@section('content')


<form method="POST" action="/admin/register"  class="form-signin">
    @csrf

    <a href="/" class="logo-container">
        <img class="mb-4" src="{{ asset('public/assets/images/logo.png')}}" alt="" height="72"/>
    </a>            
    <h1 class="h3">Admin Register</h1>
    <label for="inputUser" class="form-input">First Name</label>
    <input type="text" id="inputUser" name="first_name" class="form-control" required="" autofocus=""/>
    <label for="inputUser" class="form-input">Last Name</label>
    <input type="text" id="inputUser" name="last_name" class="form-control" required="" autofocus=""/>
    <label for="inputEmail" class="form-input">Email address</label>
    <input type="email" id="inputEmail" name="email" class="form-control" required="" autofocus=""/>
    <label for="inputPassword" class="form-input">Password</label>
    <input type="password" id="inputPassword" name="password" class="form-control" required=""/>
    <label for="inputRePassword" class="form-input">Confirm Password</label>
    <input type="password" id="inputRePassword" name="password_confirmation" class="form-control" required=""/>            
    <br/>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
    <p> Already has a account? Please <a href="/login">Login</a> </p>
    <p class="mt-2 mb-3 text-muted">©Raplex.io 2019-2020</p>
</form>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
