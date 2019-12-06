@extends('agent.layouts.app')

@section('content')
<div class="container">
@if (session('status'))
<div class="alert alert-success" role="alert">
  {{ session('status') }}
</div>
@endif    

<!-- Services Section start -->
<section class="service" style="margin-top: 100px;">
  <div class="container">
    <br><br>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
            @if($agent->profileimage=='')
            <img src="{{ asset('public/coinbase/img/user.png') }}" alt="picture" style="width:100%">
            <br>
            @else
          <img src="{{ asset('/coinbase/agent/'. $agent->profileimage) }}" alt="picture" style="width:100%">
          <br>
          @endif
          <h3>{{ $agent->agentcode }}</h3>
          <h3 class="btn btn-primary">$ {{$agent->agentfund ? $agent->agentfund->amount : '0000' }}</h3>
          <h3>{{ $agent->name }}</h3>
          <h6>{{ $agent->mobile }}</h6>
          <h6>{{ $agent->email }}</h6>

        </div>
      </div>
      <div class="col-md-2">
      </div>
      <div class="col-md-6 boxstyle">
          <h5>Profile Update </h5>
        <form action="{{ route('profileUpdate') }}" method="POST" enctype="multipart/form-data" file="true">
          @csrf
          <div class="form-group">
          <input type="text" class="form-control" name="name" value="{{ $agent->name }}">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="email" value="{{ $agent->email }}">
          </div>
          <div class="form-group">
            <input type="file" class="form-control" name="profileimage">
          </div>
          <div class="form-group col-md-3">
              <button type="submit"  class="btn btn-outline-secondary">Update</button>
            </div>
        </form>
        <br>
        <hr>
        <h5>Change Password</h5>
        <form action="{{ route('passwordUpdate') }}" method="POST">
          @csrf
          @if (session('error'))
          <div class="alert alert-warning" role="alert">
            {{ session('error') }}
          </div>
          @endif  
          @if (session('successp'))
          <div class="alert alert-success" role="alert">
            {{ session('successp') }}
          </div>
          @endif 
          <div class="form-group">
          <input type="password" class="form-control" name="old_password" placeholder="Old password">
          </div>
          <div class="form-group">
            <input id="new_password" class="form-control" type="password" name="new_password" required="" placeholder="New password"/><br/>
                @if ($errors->has('new_password'))
                    <span class="help-block errshow">
                        <strong class="errshow">{{ $errors->first('new_password') }}</strong>
                    </span>
                @endif
              @error('new_password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>
          <div class="form-group">
            <input id="password-confirm" class="form-control" type="password" name="password_confirmation" required="" placeholder="Confirm password"><br/>
            @if ($errors->has('password_confirmation'))
                <span class="help-block errshow">
                    <strong class="errshow">{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group col-md-3">
            <button type="submit"  class="btn btn-outline-secondary">Update</button>
          </div>
        </form>
        
      </div>
 </div>
</div>
</section>
<!-- services end -->
<br><br>
<?php
$i=1;
    $ref=DB::table('users')
         ->where('users.useragentcode',Auth::user()->agentcode)
         ->get();
//dd();
?>
 <div class="container">
    <div class="row">
    
      <div class="col-md-2">
      </div>
        <div class="col-md-8">
            <h4>My All Referrer</h4><br>
            <table class="table table-striped">
                <thead>
                  <tr style="background-color:bisque">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Ref Code</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($ref as $ref)
                  <tr>
                    <th>{{ $i++ }}</th>
                    <td>{{ $ref->name }}</td>
                    <td>{{ $ref->usercode }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
    </div>
    <div class="col-md-2">
      </div>
  </div>
  </div>
  <br>
<!-- Footer -->
  <footer class="bg-white py-3 footer" >
    <div class="container">
      <hr>
      <div class="row">
          <div class="col-md-4">
              <h5>coinbaseclub</h5>
              <p>+1 (888) 908-7000 <br>support@coinbaseclub.com <br>© 2019 Coinbaseclub </p>
            </div>
        <div class="col-md-2 text-color" >
          <h6>Products</h6><br>
          <a href="">Coinbaseclub</a>
          <a href="">Commerce</a><br>
          <a href="">Custody</a><br>
        </div>
        <div class="col-md-2 text-color">
         <h6>Learn</h6><br>
         <a href="">Buy Bitcoin</a><br>
          <a href="">Buy Bitcoin Cash</a><br>
          <a href="">Buy Ethereum</a><br>
        </div>
        <div class="col-md-2 text-color">
         <h6> Company</h6><br>
         <a href="">About</a><br>
          <a href="">Affiliates</a><br>
          <a href="">Careers</a><br>
        </div>
        <div class="col-md-2 text-color">
          <h6> Social</h6><br>
         <a href="">Blog</a><br>
          <a href="">Twitter</a><br>
          <a href="">Facbook</a><br>
        </div>
      </div>
    </div>
  </footer>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('style')
<style>
.errshow {
  color:red;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
@endsection
