<!--   nabbar start -->
<nav  class="navbar navbar-expand-lg navbar-light fixed-top " >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div  class="container collapse navbar-collapse" >
    <a class="navbar-brand text-white  " href="{{ url('admin/dashboard') }}" style="font-size: 25px;">Coinbaseclub</a>&nbsp;&nbsp;
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link text-white" href="{{ route('agentcode.index') }}">{{ __('Agent') }}</a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item ">
        <a class="nav-link text-white" href="{{ route('beating') }}">{{ __('Beat') }}</a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item ">
        <a class="nav-link text-white" href="{{ route('admin.fund') }}">{{ __('Admin Fund') }}</a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item ">
        <a class="nav-link text-white" href="{{ route('show.agent.fund.transfer') }}">{{ __('Agent Fund Transfer') }}</a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          History
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('agent.fund.history') }}">Agent Transfer</a>
          <a class="dropdown-item" href="{{ route('client.fund.history') }}">Client Transfer</a>
          <a class="dropdown-item" href="{{ route('bet.hold.history') }}">Bet Hold</a>
          <a class="dropdown-item" href="{{ route('bet.win.history') }}">Bet Win History</a>
          <a class="dropdown-item" href="{{ route('withdraw.history') }}">Withdraw History</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link text-white dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw">Admin</i>
          </a>
          <div class="dropdown-menu bgstyle dropdown-menu-right" aria-labelledby="userDropdown">
          {{-- <a class="dropdown-item" href="#">Settings</a> --}}
          <div class="dropdown-divider"></div>
            <a class="dropdown-item font-weight-medium" href="{{ route('admin.logout') }}">
              <i class="fa fa-lock"></i>
              Logout
            </a>
          </div>
      </li>
    </ul>
  </div>
</nav>
 <!--   nabbar end -->