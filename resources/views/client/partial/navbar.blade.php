@php 
$client = App\User::with('clientfund')->findOrFail(Auth::user()->id);

//dd($client);
@endphp

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div class="container">
    <a class="navbar-brand" href="{{ ('dashboard') }}" style="font-size:25px;">Coinbaseclub</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('get.update.profile') }}">Update Profile</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href=""  data-toggle="modal" data-target="#withdrawModal">
                Fund Withdraw
              </a>
        </li>
&nbsp;
        <li class="nav-item">
            <a class="nav-link text-white btn btn-warning" href="#">$ {{ $client->clientfund ? $client->clientfund->amount : '0000' }}</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown no-arrow">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>
              
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
          </li>
        </ul>
    </div>
  </div>
  </nav>
<!-- Modal -->
<div class="modal fade" id="withdrawModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <div class="col-md-10">
          <h5 class="modal-title" id="exampleModalLabel">Fund Withdraw</h5>
        </div>
        <div class="col-md-2">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>       
      </div>
    </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <form action="{{ route('withdrawAmount') }}" method="POST">
                @csrf
                <div class="form-group">
                  <input type="hidden" name="userid" value="{{ Auth::user()->id }}">
                  <div class="form-group">
                    <select class="form-control col-md-12" name="payment">
                      <option class="form-control" value="Bkash">Bkash</option>
                      <option class="form-control" value="Roket">Roket</option>
                      <option class="form-control" value="Nagad">Nagad</option>
                    </select>
                  </div>
                    <br>
                  <input class="form-control" name="number" type="text" min="0" required="" placeholder="Enter Mobile No.">
<br>
                  <input class="form-control" name="password" type="password" required="" placeholder="Password">
                  <br>
                  <input class="form-control" name="withdrawamount" type="number" min="0" required="" placeholder="Enter Amount">
                </div>
                <button  class="btn btn-primary my-4 btn-block " type="submit">Send</button>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>