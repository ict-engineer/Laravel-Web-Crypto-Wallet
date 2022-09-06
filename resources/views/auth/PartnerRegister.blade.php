@extends('layouts.app')

@section('content')

<form method="POST" action="/businessuser/register"  class="form-signin">
    @csrf
    <a href="/" class="logo-container">
        <img class="mb-4" src="{{ asset('public/assets/images/logo.png')}}" alt="" height="72"/>
    </a>
    <h1 class="h3">Register</h1>
    <label for="inputOrg" class="form-input">Organization Name</label>
    <input type="text" name="organization_name" id="inputOrg" class="form-control" value="{{ old( 'organization_name' ) }}" required="" autofocus=""/>
    <label for="inputfrt" class="form-input">First Name</label>
    <input type="text" id="inputfrt" name="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old( 'first_name' ) }}" required="" autofocus=""/>
    @if( $errors->has( 'first_name' ) )
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first( 'first_name' ) }}</strong>
        </span>
    @endif
    <label for="inputlast" class="form-input">Last Name</label>
    <input type="text" id="inputlast" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old( 'last_name' ) }}" required="" autofocus=""/>
    @if( $errors->has( 'last_name' ) )
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first( 'first_name' ) }}</strong>
        </span>
    @endif
    <label for="inputlink" class="form-input">Web Site Url</label>
    <input type="text" id="inputlast" name="website_url" class="form-control" value="{{ old( 'website_url' ) }}" required="" autofocus=""/>
    <label for="inputRevenue" class="form-input">Yearly Revenue</label>
    <select id="inputRevenue"  name="revenue" class="form-control" value="{{ old( 'revenue' ) }}" required="">
    <option>$ 0 ~ 2 Million</option>
    <option>$ 2 ~ 25 Million</option>
    <option>$ 25 ~ 150 Million</option>
    <option>$ 150 ~ 500 Million</option>
    <option>$ 500 ~ 2 Billion</option>
    <option>$ 2 Billion+</option>
    </select>          
    <label for="inputEmail" class="form-input">Email address</label>
    <input type="email" id="inputEmail" name="email" value="{{ old( 'email' ) }}" class="form-control @error('email') is-invalid @enderror" required="" autofocus=""/>
    @if( $errors->has( 'email' ) )
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first( 'email' ) }}</strong>
        </span>
    @endif
    <label for="inputPassword" class="form-input">Password</label>
    <input type="password" id="inputPassword" name="password" class="form-control @error('password') is-invalid @enderror" required=""/>
    @if( $errors->has( 'password' ) )
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first( 'password' ) }}</strong>
        </span>
    @endif
    <label for="inputRePassword" class="form-input">Confirm Password</label>
    <input type="password" id="inputRePassword" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" required=""/>            
    @if( $errors->has( 'confirm_password' ) )
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first( 'confirm_password' ) }}</strong>
        </span>
    @endif
    <br/>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
    <p> Already has a account? Please <a href="/login">Login</a> </p>
    <p class="mt-2 mb-3 text-muted">©Raplex.io 2019-2020</p>
</form>
@endsection