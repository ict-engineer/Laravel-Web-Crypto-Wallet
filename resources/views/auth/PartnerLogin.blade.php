@extends('layouts.app')

@section('content')


<form method="POST" action="{{ route('login') }}" class="form-signin">
    @csrf
    <a href="/" class="logo-container">
        <img class="mb-4" src="{{ asset('public/assets/images/logo.png')}}" alt="" height="72"/>
    </a>
    
    <h1 class="h3">Partner Login</h1>
    <label for="inputEmail" class="form-input">Email address</label>
    <input type="email" id="inputEmail" name="email" class="form-control" required="" autofocus=""/>
    <label for="inputPassword" class="form-input">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" required=""/>
    <div class="checkbox mb-3">
        <label>
        <input type="checkbox" value="remember-me" /> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p> Don't have the account? Please <a href="{{ route('partner.register') }}">Sign Up</a> </p>
    <p class="mt-2 mb-3 text-muted">©Raplex.io 2019-2020</p>
</form>
@endsection
