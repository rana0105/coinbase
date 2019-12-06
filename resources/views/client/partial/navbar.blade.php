@php 
$client = App\User::with('clientfund')->findOrFail(Auth::user()->id);

//dd($client);
@endphp

<!--   nabbar start -->
<nav  class="navbar navbar-expand-lg navbar-light fixed-top " >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div  class="container collapse navbar-collapse" >
    <a class="navbar-brand text-white  " href="{{ ('dashboard') }}" style="font-size: 25px;">Coinbaseclub</a>&nbsp;&nbsp;
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link text-white" href="{{ route('get.update.profile') }}">Update Profile</a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
      <li class="nav-item">
        {{-- <a class="nav-link text-white " href="#">Fund Withdraw</a> --}}
        <a class="nav-link text-white btn btn-primary" type="" data-toggle="modal" data-target="#withdrawModal">
  Fund Withdraw
</a>
      </li>
      <li class="nav-item">&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link text-white btn btn-warning" href="#">$ {{ $client->clientfund ? $client->clientfund->amount : '0000' }}</a>
      </li>&nbsp;&nbsp;&nbsp;
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
</nav>
<!-- Modal -->
<div class="modal fade" id="withdrawModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Withdraw Amount</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-10">
            <form action="{{ route('withdrawAmount') }}" method="POST">
              @csrf
              <div class="form-group">
                <input type="hidden" name="userid" value="{{ Auth::user()->id }}">
                <input class="form-control" name="withdrawamount" type="number" required="" placeholder="Input Amount">
              </div>
              <button  class="btn btn-primary my-4 btn-block " type="submit">Save</button>
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
 <!--   nabbar end -->