@extends('layouts.app')

@section('content')


<form method="POST" action="/generaluser/register"  class="form-signin">
    @csrf
    <a href="/" class="logo-container">
        <img class="mb-4" src="{{ asset('public/assets/images/logo.png')}}" alt="" height="72"/>
    </a>            
    <h1 class="h3">Register</h1>
    <label for="inputUser" class="form-input">First Name</label>
    <input type="text" id="inputUser" name="first_name" class="form-control" value="{{ old( 'first_name' ) }}" required="" autofocus=""/>
    <label for="inputUser" class="form-input">Last Name</label>
    <input type="text" id="inputUser" name="last_name" class="form-control" value="{{ old( 'last_name' ) }}" required="" autofocus=""/>
    <label for="inputEmail" class="form-input">Email address</label>
    <input type="email" id="inputEmail" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old( 'email' ) }}" required="" autofocus=""/>
    @if( $errors->has( 'email' ) )
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first( 'email' ) }}</strong>
        </span>
    @endif
    <label for="inputPassword" class="form-input">Password</label>
    <input type="password" id="inputPassword" name="password" value="{{ old( 'password' ) }}" class="form-control" required=""/>
    <label for="inputRePassword" class="form-input">Confirm Password</label>
    <input type="password" id="inputRePassword" name="password_confirmation" value="{{ old( 'password_confirmation' ) }}" class="form-control" required=""/>            
    <br/>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
    <p> Already has a account? Please <a href="/login">Login</a> </p>
    <p class="mt-2 mb-3 text-muted">©Raplex.io 2019-2020</p>
</form>
@endsection
