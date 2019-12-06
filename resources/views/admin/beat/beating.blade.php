@extends('admin.layouts.app')
@section('content')
    <div class="container">
      <div class="row" style="margin-top: 100px;">
        <div class="col-md-6">
          {{-- <a class="btn btn-sm btn-success" href="{{ route('beating.create') }}">+Add</a> --}}
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
          @endif
        </div>
      </div>

<!-- table chart start -->
<div class="container table-chart" style="margin-top: 30px;">
      <div class="row boxstyle">
      <table class="table" >
  <thead class="text-muted">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      {{-- <th scope="col">Quantity</th> --}}
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($beats as $key => $beat)
      <tr>
        <td>{{ ++$key }}</td>
        <td>{{ $beat->name }}</td>
        <td>{{ $beat->price }}</td>
        {{-- <td>{{ $beat->quantity }}</td> --}}
        <td><a href="{{ URL::route('beating.edit', $beat->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i> Edit</a></td>
      </tr>
      @endforeach
  </tbody>
</table>
    </div>
</div>
<!-- table chart end -->
    </div>

<!-- Services Section start -->
<section class="service" >
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <b><h3>Earn up to $130 worth of crypto</h3></b>
        <p>Discover how specific cryptocurrencies work — and get a bit of each crypto to try out for yourself.</p>
        <button class=" btn-primary btn5">Start earning</button>
      </div>
      <div class="col-md-2">
      </div>
      <div class="col-md-6">
       <table class="table">
        <tbody >
          <tr>
            <td>Dai &nbsp;&nbsp; <span class="span3">DAI</span></td>
            <td></td><td></td><td></td>
            <td><span style="color:#05b169;">Earn $20 DAI</span></td>
          </tr>

          <tr>
           <td>EOS &nbsp;&nbsp;<span class="span3" >EOS</span></td>
           <td></td><td></td><td></td>
           <td><span style="color:#05b169;">Earn $50 EOS</span></td>
         </tr>

         <tr>
           <td>Stellar Lumens &nbsp;&nbsp;<span class="span3" >XLM</span></td>
           <td></td><td></td><td></td>
           <td><span style="color:#05b169;">Earn $50 XLM</span></td>
         </tr>

         <tr>
           <td>BAT&nbsp;&nbsp;<span class="span3" >BAT</span></td>
           <td></td><td></td><td></td>
           <td><span style="color:#05b169;">Earn $10 BAT</span></td>
         </tr>

       </tbody>
     </table>
   </div>
 </div>
</div>
</section>
<!-- services end -->



<!-- Portfolio Section -->
  <section class="portfolio">
    <div class="container" >
      <center><h2>Create your cryptocurrency portfolio today</h2></center><br>
      <center><p>Coinbaseclub has a variety of features that make it the best place to start trading</p></center><br><br>
      <div class="row ">
      <div class="col-md-5 ">
        <div class="row">
         <div class="col-md-4">
        <img src="{{ asset('coinbase/img/1.PNG') }}" >

       </div> 
       <div class="col-md-8">
        <h5>Manage your portfolio</h5>
       <p>Buy and sell popular digital currencies, keep track of them in the one place.</p>
       </div>
       <div class="col-md-4">
         <img src="{{ asset('coinbase/img/2.PNG') }}">

       </div>
       <div class="col-md-8">
         <h5>Recurring buys</h5>
       <p>Invest in cryptocurrency slowly over time by scheduling buys daily, weekly, or monthly.</p>

       </div> 
       <div class="col-md-4">
        <img src="{{ asset('coinbase/img/3.PNG') }}">

       </div> 
       <div class="col-md-8">
        <h5>Vault protection</h5>
       <p >For added security, store your funds in a vault with time delayed withdrawals.</p>
       </div>
       <div class="col-md-4">
        <img src="{{ asset('coinbase/img/4.PNG') }}">

       </div> 
       <div class="col-md-8">
        <h5>Mobile apps</h5>
       <p>Stay on top of the markets with the Coinbase app for Android or iOS.</p>
       </div>
        </div>
      </div>
      <div class="col-md-7">
     <img src="{{ asset('coinbase/img/3.PNG') }}">
      </div>
      </div>
    </div>
  </section>
<!-- Portfolio Section end -->

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