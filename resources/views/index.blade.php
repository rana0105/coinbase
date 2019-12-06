@extends('layouts.main')
@section('content')
<style>
    @media only screen and (min-width: 600px) {
      .mobile{
        display: none;
      }
    }
    @media only screen and (max-width: 600px) {
      .destop{
        display: none;
      }
    }
    </style>    

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div class="container">
  <a class="navbar-brand" href="{{ ('/') }}" style="font-size:25px;">Conbaseclub</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="https://www.coinbase.com/price" style="color:white;">Prices  </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
         Company
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
          <a class="dropdown-item" href="https://www.coinbase.com/about">About Us</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://blog.coinbase.com/">Blog</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://support.coinbase.com/">Support</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://www.coinbase.com/careers">Careers</a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="https://www.coinbase.com/earn" style="color:white;"  >Earn crypto
            </a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <ul class="navbar-nav ml-auto  my-2 my-lg-0">
         <li class="nav-item">
           <a class="nav-link text-white" href="{{ route('login') }}">Sign in</a>
         </li>
         &nbsp; &nbsp;
          <li class="nav-item">
     <a class="btn btn-outline-light btn-lg my-2 my-sm-0" style="" href="{{ route('register') }}">Get Started</a>
         </li>
       </ul>
   </form>
  </div>
</div>
</nav>

 <!-- header part -->
  <header class="header bg-primary" >
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h2 class="text-white font-weight-bold text">Buy and sell cryptocurrency</h2>
         <br>
        </div>
        <div class="col-lg-5 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Coinbase is the easiest place to buy, sell, and manage your cryptocurrency portfolio.</p>
            <div class="col-12 destop">
          <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" size="30" type="email" placeholder="Email Address" aria-label="Search">
              <button class="btn btn-success  my-2 my-sm-12" type="submit">Subscribe</button>
            </form>
            </div>

            <div class="col-12 mobile">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" size="30" type="email" placeholder="Email Address" aria-label="Search">
                    <br> <br> 
                    <button class="btn btn-success  col-12" type="submit">Subscribe</button>
                  </form>
                </div>
           {{-- <input type="text" size="5" placeholder=" Email Address" class="form-control" name="search">
          <a class="btn btn-success btn3" href="{{ route('register') }}">Get started</a> --}}
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
              <div class="col-md-4 text-center" >
               <img src="{{ asset('coinbase/img/8.PNG') }}" width="90px" height="90px;">
               <h5>Create an account</h5>
               <br><br>
              </div>
            <div class="col-md-4 text-center">
               <img src="{{ ('coinbase/img/9.PNG') }}" width="90px" height="90px;">
               <h5>Link your bank account</h5>
               <br><br>
              </div>
              <div class="col-md-4 text-center">
                <img src="{{ ('coinbase/img/10.PNG') }}" width="90px" height="90px;">
                <h5>Start buying & selling</h5>
              </div> <br>    
      </div>
      </div>
</section>
<!-- Get stared end -->


<!-- Footer -->
<br>
  <footer class="bg-white py-3 footer" >
    <div class="container">
      <hr>
      <div class="row">
        <div class="col-md-4">
          <h5>coinbaseclub</h5>
          <p>+1 (888) 908-7000 <br>support@coinbaseclub.com</p>
          <p>© 2019 Coinbaseclub</p>
        </div>
        <div class="col-md-2 text-color" >
          <h6>Products</h6><br>
        <a href="{{url('/register') }}">Coinbaseclub</a>
          <a href="https://commerce.coinbase.com/">Commerce</a><br>
          <a href="https://custody.coinbase.com/">Custody</a><br>
          <a href="https://www.coinbase.com/earn">Earn</a><br>
          <a href="https://pro.coinbase.com/">Pro</a><br>
          <a href="https://www.coinbase.com/usdc">USD coin</a><br>
          <a href="https://wallet.coinbase.com/">Wallet</a><br>
          <a href="https://ventures.coinbase.com/">Ventures</a>
        </div>
        <div class="col-md-2 text-color">
         <h6>Learn</h6><br>
         <a href="https://www.coinbase.com/buy-bitcoin">Buy Bitcoin</a><br>
          <a href="https://www.coinbase.com/buy-bitcoincash">Buy Bitcoin Cash</a><br>
          <a href="https://www.coinbase.com/buy-ethereum">Buy Ethereum</a><br>
          <a href="https://www.coinbase.com/buy-litecoin">Buy Litecoin</a><br>
          <a href="https://www.coinbase.com/buy-xrp">Buy XRP</a><br>
          <a href="https://www.coinbase.com/places">Support countries</a><br>
          <a href="https://status.coinbase.com/">Status</a><br>
          <a href="https://www.coinbase.com/bitcoin-taxes">Ventures</a>
        </div>
        <div class="col-md-2 text-color">
         <h6> Company</h6><br>
         <a href="https://www.coinbase.com/about">About</a><br>
          <a href="https://www.coinbase.com/affiliates">Affiliates</a><br>
          <a href="https://www.coinbase.com/careers">Careers</a><br>
          <a href="https://www.coinbase.com/partners">Partners</a><br>
          <a href="https://www.coinbase.com/press">Press</a><br>
          <a href="https://www.coinbase.com/legal/user_agreement">Legal & Privacy</a><br>
          <a href="https://support.coinbase.com/">Support</a><br>
        </div>
        <div class="col-md-2 text-color">
          <h6> Social</h6><br>
         <a href="https://blog.coinbase.com/?gi=cf260020800e">Blog</a><br>
          <a href="https://twitter.com/coinbase">Twitter</a><br>
          <a href="https://www.facebook.com/Coinbase">Facbook</a><br>
        </div>
      </div>
    </div>
  </footer>
@endsection