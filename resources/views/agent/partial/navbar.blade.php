<!--   nabbar start -->
@php 
$agent = App\User::with('agentfund')->findOrFail(Auth::user()->id);
@endphp

<nav class="navbar navbar-expand-lg navbar-dark bg-primary  fixed-top">
  <div class="container">
    <a class="navbar-brand" href="{{ url('agent/dashboard') }}" style="font-size:25px;"> Coinbaseclub</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('agent.to.client') }}">Fund Transfer</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('agent.client.fund.history') }}">TransactionHistory</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-white btn btn-warning " href="#">$ {{ $agent->agentfund ? $agent->agentfund->amount : '0000' }}</a>
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
 <!--   nabbar end -->