@extends('admin.layouts.app')
@section('content')
 <div class="container" >
    {{-- <h3 class="h3style">Create your account</h3><br> --}}
    <div class="row col-md-12">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
        <form class="form-horizontal col-md-12"  form method="POST" action="{{ route('agentcode.store') }}" >
           @csrf
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
            <label for="email">Mobile</label>
            <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus placeholder="Enter your mobile number">
                
            @error('mobile')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Agent Code</label>
            <input id="agentcode" type="text" readonly="" class="form-control @error('agentcode') is-invalid @enderror" name="agentcode" value="{{ $agentcode }}" required autocomplete="agentcode" autofocus placeholder="Enter your ref: code">
                
            @error('agentcode')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Password</label>
            
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror<i  class="fa fa-eye" onclick="myFunction()"></i>
            
          </div>

          <div class="form-group">
            <label for="email">Confirm Password</label>
            
             <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"><i  class="fa fa-eye" onclick="myFunction()"></i>
            
          </div>
          <button  class="btn btn-primary my-4 btn-block " type="submit">Save</button>
          
        </form>
      </div>
      
    </div><br>
    
  </div>

@endsection