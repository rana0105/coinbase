@extends('layouts.main')

@section('content')
 <div class="container" >
    <h3 class="h3style">Create your account</h3><br>
    <a class="h3style btn btn-info" href="{{ ('/') }}">Back Home</a>
    <br>   <br>
    <div class="row col-md-12">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
        <form class="form-horizontal col-md-12"  form method="POST" action="{{ route('register') }}" >
           @csrf
           <div class="form-group">
            @if ($message = Session::get('warning'))
              <div class="alert alert-warning">
                  <p style="color: red;">{{ $message }}</p>
              </div>
            @endif
          </div>
          <div class="form-group">
            <label>Name</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your Name">
                
            @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email address">
                
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="mobile">Mobile</label>
            <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus placeholder="Enter your mobile number">
                
            @error('mobile')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="usercode">Ref: Code</label>
            <input id="usercode" type="hidden" readonly="" class="form-control @error('usercode') is-invalid @enderror" name="usercode" value="{{ $usercode }}" required autocomplete="usercode" autofocus placeholder="Enter your ref: code">

            <input id="refcode" type="text"  class="form-control @error('refcode') is-invalid @enderror" name="refcode" required value=""  autocomplete="refcode" autofocus placeholder="Enter your ref: code">
                
            @error('usercode')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            @error('refcode')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            @if ($message = Session::get('error'))
                    <div class="alert alert-danger">
                        <p>{{ $message }}</p>
                      </div>
             @endif
          </div>
          <div class="form-group">
            <label for="email">Agent Code</label>
            <select id="useragentcode" type="text" class="form-control @error('useragentcode') is-invalid @enderror" name="useragentcode" value="{{ old('useragentcode') }}" required autocomplete="useragentcode" autofocus>
              <option value="">--Select Agent Code--</option>
              @foreach($agentcode as $agent)
              <option value="{{ $agent->agentcode }}">{{ $agent->agentcode }} - {{ $agent->name }}</option>
              @endforeach
            </select>
                
            @error('agentcode')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Country</label>
            <select id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus>
              <option value="">--Select Country--</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="India">India</option>
              <option value="Myanmar">Myanmar</option>
              <option value="Thailand">Thailand</option>
            </select>
                
                @error('country')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror<i  class="fa fa-eye" onclick="myFunction()"></i>
            
          </div>

          <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            
             <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"><i  class="fa fa-eye" onclick="myFunction()"></i>
            
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