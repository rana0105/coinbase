@extends('client.layouts.app')

@section('content')

  
@if (session('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif    

<!-- table chart start -->
<div class="container table-chart" style="margin-top: 100px;">
      <div class="row boxstyle">
      <table class="table" >
  <h5 style="text-align: center; margin-bottom: 20px;">Bet Hold</h5>
  <thead class="text-muted">
    <tr class="trstyle">
      <th scope="col">#</th>
      <th scope="col"> Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Hold</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>&nbsp;&nbsp;<span class="span">{{ $bets[0]['name']}}</span></td>
      <td>{{ $bets[0]['price']}}</td>
      <td>{{ $count1 }}</td>
      <td>
        {{-- <form action="{{ route('bet.hold') }}" method="POST">
          @csrf --}}
          <input type="hidden" name="betid" value="{{ $bets[0]['id']}}">
          <input type="hidden" name="betname" value="{{ $bets[0]['name']}}">
          <input type="hidden" name="betprice" value="{{ $bets[0]['price']}}">
          {{-- <button class="btn-success btn4">Buy</button> --}}
           <a class="btn btn-sm btn-success betHold" data-refresh="true" data-toggle="modal" data-target="#betEditModal" data-bets="{{ json_encode($bets[0])}}" href="#">Buy</a>
        {{-- </form> --}}
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>&nbsp;&nbsp;<span class="span">{{ $bets[1]['name']}}</span></td>
      <td>{{ $bets[1]['price']}}</td>
      <td>{{ $count2 }}</td>
      <td>
        {{-- <form action="{{ route('bet.hold') }}" method="POST">
          @csrf --}}
          <input type="hidden" name="betid" value="{{ $bets[1]['id']}}">
          <input type="hidden" name="betname" value="{{ $bets[1]['name']}}">
          <input type="hidden" name="betprice" value="{{ $bets[1]['price']}}">
          {{-- <button class="btn-success btn4">Buy</button> --}}
           <a class="btn btn-sm btn-success betHold" data-refresh="true" data-toggle="modal" data-target="#betEditModal" data-bets="{{ json_encode($bets[1])}}" href="#">Buy</a>
        {{-- </form> --}}
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>&nbsp;&nbsp;<span class="span">{{ $bets[2]['name']}}</span></td>
      <td>{{ $bets[2]['price']}}</td>
      <td>{{ $count3 }}</td>
      <td>
        {{-- <form action="{{ route('bet.hold') }}" method="POST">
          @csrf --}}
          <input type="hidden" name="betid" value="{{ $bets[2]['id']}}">
          <input type="hidden" name="betname" value="{{ $bets[2]['name']}}">
          <input type="hidden" name="betprice" value="{{ $bets[2]['price']}}">
          {{-- <button class="btn-success btn4">Buy</button> --}}
           <a class="btn btn-sm btn-success betHold" data-refresh="true" data-toggle="modal" data-target="#betEditModal" data-bets="{{ json_encode($bets[2])}}" href="#">Buy</a>
        {{-- </form> --}}
      </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>&nbsp;&nbsp;<span class="span">{{ $bets[3]['name']}}</span></td>
      <td>{{ $bets[3]['price']}}</td>
      <td>{{ $count4 }}</td>
      <td>
        {{-- <form action="{{ route('bet.hold') }}" method="POST">
          @csrf --}}
          <input type="hidden" name="betid" value="{{ $bets[3]['id']}}">
          <input type="hidden" name="betname" value="{{ $bets[3]['name']}}">
          <input type="hidden" name="betprice" value="{{ $bets[3]['price']}}">
          {{-- <button class="btn-success btn4">Buy</button> --}}
          <a class="btn btn-sm btn-success betHold" data-refresh="true" data-toggle="modal" data-target="#betEditModal" data-bets="{{ json_encode($bets[3])}}" href="#">Buy</a>
        {{-- </form> --}}
      </td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>&nbsp;&nbsp;<span class="span">{{ $bets[4]['name']}}</span></td>
      <td>{{ $bets[4]['price']}}</td>
      <td>{{ $count5 }}</td>
      <td>
        {{-- <form action="{{ route('bet.hold') }}" method="POST">
          @csrf --}}
          <input type="hidden" name="betid" value="{{ $bets[4]['id']}}">
          <input type="hidden" name="betname" value="{{ $bets[4]['name']}}">
          <input type="hidden" name="betprice" value="{{ $bets[4]['price']}}">
          {{-- <button class="btn-success btn4">Buy</button> --}}
          <a class="btn btn-sm btn-success betHold" data-refresh="true" data-toggle="modal" data-target="#betEditModal" data-bets="{{ json_encode($bets[4])}}" href="#">Buy</a>
        {{-- </form> --}}
      </td>
    </tr>
    
  </tbody>
</table>
    </div>
</div>
<!-- table chart end -->

<!-- Services Section start -->
<section class="service" >
  <div class="container">
    <form action="{{ route('dashboard') }}" method="POST">
      @csrf
      <div class="row">
        <div class="col-md-3">
          <select name="key" id="" class="form-control" required="">
            <option value="">Select One</option>
            <option value="1">Withdraw History</option>
            <option value="2">Bet Win History</option>
          </select>
        </div>
        <div class="col-md-1">
          <p style="margin-top:7px;">From</p>
          </div>
        <div class="col-md-3">
          <input type="date" name="from_date" class="form-control" placeholder="From Date">
        </div>
        <div class="col-md-1">
            <p style="margin-top:7px;">To</p>
            </div>
        <div class="col-md-3">
          <input type="date" name="to_date" class="form-control" placeholder="To Date">
        </div>
        <div class="col-md-1">                
        <button  class="btn btn-sm btn-primary" type="submit">Search</button>
        </div>
      </div>
    </form>
    <div class="row" style="margin-top: 30px;">
      <div class="col-md-6">
        <h6>Withdraw History</h6>
        <table class="table" style="margin-top: 10px;">
          <thead>
            <tr class="trstyle">
              <th>#</th>
              <th>Withdraw Amount</th>
              <th>Status</th>
              <th>Date</th> 
            </tr>
          </thead>
          <tbody >
            @foreach($withdraws as $key => $with)
            <tr>
              <td>{{ ++$key }}</td>
              <td >{{ $with->actualamount }}</td>
              <td>
                @if($with->status == 1)
                <span style="color:green;">Approve</span>
                @else
                <span style="color:red;">Pending</span>
                @endif
              </td>
              <td>{{ date('d-M-Y', strtotime($with->created_at)) }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="col-md-6">
        <h6>Bet Win History</h6>
      <table class="table" style="margin-top: 10px;">
        <thead>
          <tr class="tablestyle">
            <th>Bet Name</th>
            <th>Quantity</th>
            <th>Win Amount</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody >
          @foreach($betWin as $win)
          <tr>
            <td>{{ $win->betWinInfo->name }}</td>
            <td >{{ $win->bcount }}</td>
            <td >{{ $win->bamount }}</td>
            <td>{{ date('d-M-Y', strtotime($win->created_at)) }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
   </div>
 </div>
</div>
</section>
<!-- services end -->



<!-- Portfolio Section -->
  {{-- <section class="portfolio">
    <div class="container" >
      <center><h2>Create your cryptocurrency portfolio today</h2></center><br>
      <center><p>Coinbaseclub has a variety of features that make it the best place to start trading</p></center><br><br>
      <div class="row ">
      
      </div>
    </div>
  </section> --}}
<!-- Portfolio Section end -->

<!-- Footer -->
  <footer class="bg-white py-3 footer">
    <hr>
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
        </div>
        <div class="col-md-2 text-color">
         <h6>Learn</h6><br>
         <a href="">Buy Bitcoin</a><br>
          <a href="">Buy Bitcoin Cash</a><br>
          <a href="">Buy Ethereum</a><br>
          <a href="">Buy Litecoin</a><br>
        </div>
        <div class="col-md-2 text-color">
         <h6> Company</h6><br>
         <a href="">About</a><br>
          <a href="">Affiliates</a><br>
          <a href="">Careers</a><br>
          <a href="">Partners</a><br>
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
  {{-- Start Modal 'for' Bet hold --}}
<div class="modal fade" id="betEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Bet Hold</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body betEditAdd">
          <form action="{{ route('bet.hold') }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <input type="hidden" class="bet_id" name="bet_id">
                <input type="hidden" class="bet_price" name="bet_price">
                <input type="text" readonly="" class="bet_name" name="bet_name">
                <input type="text" readonly="" class="total_price" name="total_price">
                <div class="number">
                  <span class="minus">-</span>
                  <input class="quantity" readonly="" name="quantity" type="text"/>
                  <span class="plus" id="plus_d">+</span>
                </div>
                <div class="div_style">
                  <input type="password" name="password" class="form-control" placeholder="Enter your password" required=""></br>
                </div>
                <button class="btn btn-success btn-block">Buy</button>
                </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
        </div>
        </div>
    </div>
</div>
{{-- End Bet hold Modal --}}    
@endsection

@section('style')
<style>
  span {cursor:pointer; }
    .div_style{
      width: 97%;
    }
    .number{
       margin: 35px 0px 25px 0px;
    }

    input.quantity {
        width: 61%;
    }
    .plus{
      width:34px;
      height:54px;
      background:#05b169;
      font-size: 25px;
      color: #ffffff;
      border-radius:4px;
      padding:8px 5px 8px 5px;
      border:1px solid #05b169;
      display: inline-block;
      vertical-align: middle;
      text-align: center;
    }

    .minus{
      width:34px;
      height:54px;
      background:#ff0202;
      font-size: 25px;
      color: #ffffff;
      border-radius:4px;
      padding:8px 5px 8px 5px;
      border:1px solid #ff0202;
      display: inline-block;
      vertical-align: middle;
      text-align: center;
    }

    input{
      height:34px;
      width: 100px;
      text-align: center;
      font-size: 26px;
      border:1px solid #ddd;
      border-radius:4px;
      display: inline-block;
      vertical-align: middle;
</style>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
    $(document).ready(function(){
      
      var count = 0;
      var bet = {};
      $(document).on('click', 'a.betHold', function() {
        count = 1;
        $('.quantity').val(count)
          bet = $(this).attr('data-bets');
          bet = JSON.parse(bet);
          $('.bet_id').val(bet.id);
          $('.bet_price').val(bet.price);
          $('.bet_name').val(bet.name);
          if (count < 5) {
            $('.total_price').val(bet.price*count)
          }
          
      });

      $('.minus').click(function () {
        if (count > 1) {
          count = parseInt(count) - 1;
          $('.total_price').val(count*bet.price);
        }
        
        var $input = $(this).parent().find('input');
        var change = parseInt($input.val()) - 1;
        change = change < 1 ? 1 : change;
        $input.val(change);
        $input.change();
        return false;
      });

      $('.plus').click(function () {
        
        var $input = $(this).parent().find('input');
        if (count < 5) {
          count = parseInt(count) + parseInt(1)
          $input.val(parseInt($input.val()) + 1);
          $('.total_price').val(count*bet.price);
        }
        $input.change();
        return false;
      });

    });

    

</script>
@endsection
