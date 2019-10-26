@extends('layouts.main')
@section('content')
    

<!--   nabbar start -->
  <nav  class="navbar navbar-expand-lg navbar-light fixed-top " >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div  class="container collapse navbar-collapse" >
    <a class="navbar-brand text-white  " href="{{ ('/') }}" style="font-size: 25px;">coinbaseclub</a>&nbsp;&nbsp;
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link text-white" href="#">Prices </a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Products</a>
      </li>
      <li class="nav-item">&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ url('agent/login') }}">Agent Login</a>
      </li>
      <li class="nav-item">&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ url('admin/login') }}">Admin Login</a>
      </li>&nbsp;&nbsp;&nbsp;
      <button class="btn btn-success btn1 text-center">up to$130</button>
    </ul>
    <form class="form-inline my-2 my-lg-0">
         <ul class="navbar-nav ml-auto  my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('login') }}">Sign in</a>
          </li>
           <li class="nav-item">
      <a class="btn btn-success btn2" style="" href="{{ route('register') }}">Get started</a>
          </li>
        </ul>
    </form>
  </div>
</nav>
 <!--   nabbar end -->
  
 <!-- header part -->
  <header class="header">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h2 class="text-white font-weight-bold text">Buy and sell cryptocurrency</h2>
         <br>
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Coinbase is the easiest place to buy, sell, and manage your cryptocurrency portfolio.</p>
           <input type="text" placeholder=" Email Address" class="form-control" name="search">
          <a class="btn btn-success btn3" href="{{ route('register') }}">Get started</a>
        </div>
      </div>
    </div>
  </header>
   <!-- header end -->

<!-- Get stared -->

<section class="get-started">
          <div class="container text-center">
              <h2>Get started in a few minutes</h2>
                <p>Coinbase supports a variety of the most popular digital currencies.</p>
            <br><br>
               <div class="row justify-content-center">
              <div class="col-md-4 text-center">
               <img src="{{ asset('coinbase/img/8.PNG') }}" width="90px" height="90px;">
               <h5>Create an account</h5>
              </div>
            <div class="col-md-4 text-center">
               <img src="{{ ('coinbase/img/9.PNG') }}" width="90px" height="90px;">
               <h5>Link your bank account</h5>
              </div>
              <div class="col-md-4 text-center">
                <img src="{{ ('coinbase/img/10.PNG') }}" width="90px" height="90px;">
                <h5>Start buying & selling</h5>
              </div>     
      </div>
      </div>
</section>
<!-- Get stared end -->


<!-- Footer -->
  <footer class="bg-white py-3 footer" >
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5>coinbaseclub</h5>
          <p>+1 (888) 908-7000</p>
          <p><a href="">support.coinbaseclub.com</a></p>
          <p>© 2019 Coinbaseclub</p>
        </div>
        <div class="col-md-2 text-color" >
          <h6>Products</h6><br>
          <a href="">Coinbaseclub</a>
          <a href="">Commerce</a><br>
          <a href="">Custody</a><br>
          <a href="">Earn</a><br>
          <a href="">Pro</a><br>
          <a href="">USD coin</a><br>
          <a href="">Wallet</a><br>
          <a href="">Ventures</a>
        </div>
        <div class="col-md-2 text-color">
         <h6>Learn</h6><br>
         <a href="">Buy Bitcoin</a><br>
          <a href="">Buy Bitcoin Cash</a><br>
          <a href="">Buy Ethereum</a><br>
          <a href="">Buy Litecoin</a><br>
          <a href="">Buy XRP</a><br>
          <a href="">Support countries</a><br>
          <a href="">Stayus</a><br>
          <a href="">Ventures</a>
        </div>
        <div class="col-md-2 text-color">
         <h6> Company</h6><br>
         <a href="">About</a><br>
          <a href="">Affiliates</a><br>
          <a href="">Careers</a><br>
          <a href="">Partners</a><br>
          <a href="">Press</a><br>
          <a href="">Legal & Privacy</a><br>
          <a href="">Support</a><br>
          <a href="">Ventures</a>
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
@endsection