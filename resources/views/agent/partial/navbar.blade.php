<!--   nabbar start -->
<nav  class="navbar navbar-expand-lg navbar-light fixed-top " >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div  class="container collapse navbar-collapse" >
    <a class="navbar-brand text-white  " href="{{ url('agent/dashboard') }}" style="font-size: 25px;">Coinbaseclub</a>&nbsp;&nbsp;
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link text-white" href="#">Update Profile</a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Fund Transfer</a>
      </li>
      <li class="nav-item">&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link text-white " href="#">Fund Withdraw</a>
      </li>
      <li class="nav-item">&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Earn Cropty</a>
      </li>&nbsp;&nbsp;&nbsp;
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link text-white dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw">Agent</i>
          </a>
          <div class="dropdown-menu bgstyle dropdown-menu-right" aria-labelledby="userDropdown">
          {{-- <a class="dropdown-item" href="#">Settings</a> --}}
          <div class="dropdown-divider"></div>
            <a class="dropdown-item font-weight-medium" href="{{ route('agent.logout') }}">
              <i class="fa fa-lock"></i>
              Logout
            </a>
          </div>
      </li>
    </ul>
  </div>
</nav>
 <!--   nabbar end -->