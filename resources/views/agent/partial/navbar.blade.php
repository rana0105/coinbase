<!--   nabbar start -->
@php 
$agent = App\User::with('agentfund')->findOrFail(Auth::user()->id);
@endphp

<nav  class="navbar navbar-expand-lg navbar-light fixed-top " >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div  class="container collapse navbar-collapse" >
    <a class="navbar-brand text-white  " href="{{ url('agent/dashboard') }}" style="font-size: 25px;">Coinbaseclub</a>&nbsp;&nbsp;
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      {{-- <li class="nav-item ">
        <a class="nav-link text-white" href="{{ route('agent.profile') }}">Update Profile</a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp; --}}
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ route('agent.to.client') }}">Fund Transfer</a>
      </li>
      <li class="nav-item">&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link text-white " href="{{ route('agent.client.fund.history') }}">Client Fund History</a>
      </li>
      <li class="nav-item">&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link text-white btn btn-warning " href="#">$ {{ $agent->agentfund ? $agent->agentfund->amount : '0000' }}</a>
      </li>
      <li class="nav-item">&nbsp;&nbsp;&nbsp;&nbsp;
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
 <!--   nabbar end -->