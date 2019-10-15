@extends('layouts.main')

@section('content')
 <div class="container" >
    <h3 class="h3style">Create your account</h3><br>
    <a class="h3style btn btn-info" href="{{ ('/') }}">Back Home</a>
    <div class="row col-md-12">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
        <form class="form-horizontal col-md-12"  action="#!" >

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>First name</label>
                <input type="text" class="form-control" placeholder="First name"  >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Last name</label>
                <input type="text" class="form-control" placeholder="Last name" >
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email address" name="email" >
          </div>
          <div class="form-group">
            <label for="email">Password</label>
            
            <input type="password" class="form-control" placeholder="Choose a password"  id="myInput" ><i  class="fa fa-eye" onclick="myFunction()"></i>
            
          </div><br>

          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
            <label class="custom-control-label" for="defaultRegisterFormNewsletter"> <span>By continuing, I certify that I am 18 years of age, and I agree to the<a href="" target="_blank" rel="noopener noreferrer"><span> User Agreement</span></a> and <a href="" target="_blank" rel="noopener noreferrer"><span>Privacy Policy.</span></a>.</span></label>
          </div>
          <button  class="btn btn-primary my-4 btn-block " type="submit">Create account</button>
          
        </form>
      </div>
      <div class="col-md-3">

      </div>
    </div><br>
    <p >Already have a Coinbaseclub account? <a href="{{ route('login') }}" >Log in</a> </p>
  </div>

@endsection
@section('style')
<link href="{{ asset('coinbase/css/signup.css') }}" rel="stylesheet">
@endsection