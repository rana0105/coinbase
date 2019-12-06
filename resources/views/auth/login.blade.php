@extends('layouts.main')

@section('content')

  <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color" >
    <a class="navbar-brand" href="{{ ('/') }}">coinbaseclub</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link text-white" href="#"> Help</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Price</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ route('login') }}">Sign In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white sn" href="{{ route('register') }}">Sign Up</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
  <h3 >Sign in to Coinbaseclub</h3><br>
  <div class="row col-md-12">
    <div class="col-md-3">
    </div>

    <div class="col-md-6">
      <form class="form-horizontal col-md-12"  method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
          <input id="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus placeholder="Input correct mobile Id">

          @error('mobile')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Input correct password">

          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="custom-control custom-checkbox">
         <label> <input type="checkbox" name="remember"> Keep me signed in on this computer</label>
         <button  class="btn btn-primary btn-sm pull-right" type="submit">SIGN IN </button>
       </div>
     </form>
   </div>

   <div class="col-md-3">
   </div>

 </div>
 <br>
 <div class="content" ><a  href="">Forgot password? </a> <a href="{{ route('register') }}">Don't have an account'?</a>
 @endsection
 @section('style')
   <link href="{{ asset('coinbase/css/login.css') }}" rel="stylesheet">
 @endsection