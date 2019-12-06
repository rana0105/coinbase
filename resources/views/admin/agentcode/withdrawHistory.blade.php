@extends('admin.layouts.app')
@section('content')
    <div class="container">
      <div class="row" style="margin-top: 100px;">
        <div class="col-md-6">
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
          @endif
        </div>
      </div>

<!-- table chart start -->
<div class="container table-chart" style="margin-top: 30px;">
    <form action="{{ route('withdraw.history') }}" method="POST">
      @csrf
      <div class="row boxstyle">
        <div class="col-md-3">
          <input type="text" name="key" class="form-control" placeholder="Input Client Name & Code">
        </div>
        <div class="col-md-3">
          <input type="date" name="from_date" class="form-control" placeholder="From Date">
        </div>
        <div class="col-md-3">
          <input type="date" name="to_date" class="form-control" placeholder="To Date">
        </div>
        <div class="col-md-1">                
        <button  class="btn btn-primary" type="submit">Search</button>
        </div>
      </div>
    </form>
    <div class="row boxstyle" style="margin-top: 30px;">
      <h4 style="color: green">Withdraw History</h4>
      <table class="table">
          <thead>
            <th>#</th>
            <th>Agent Name</th>
            <th>Client Name</th>
            <th>Client Mobile</th>
            <th>Withdraw Amount</th>
            <th>Actual Amount</th>
            <th>Charge Amount</th>
            <th>Status</th>
            <th>Date</th>
          </thead>
          <tbody >
            @foreach($withdraws as $key => $with)
            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $with->agentWinInfo->name }}</td>
              <td>{{ $with->clientWinInfo->name }}</td>
              <td>{{ $with->clientWinInfo->mobile }}</td>
              <td>{{ $with->withdrawamount }}</td>
              <td style="color:green;">{{ $with->actualamount }}</td>
              <td>{{ $with->chargeamount }}</td>
              <td>
                @if($with->status == 1)
                <form action="{{ route('withdraw.approve') }}" method="POST">
                  @csrf
                  <input type="hidden" name="winid" value="{{ $with->id }}">
                  <input type="hidden" name="clientid" value="{{ $with->clientid }}">
                  <input type="hidden" name="status" value="0">
                  <button class="btn btn-sm btn-primary">Approve</button>
                </form>
                @else
                <form action="{{ route('withdraw.approve') }}" method="POST">
                  @csrf
                  <input type="hidden" name="winid" value="{{ $with->id }}">
                  <input type="hidden" name="clientid" value="{{ $with->clientid }}">
                  <input type="hidden" name="status" value="1">
                  <button class="btn btn-sm btn-warning">Pending</button>
                </form>
                @endif
              </td>
              <td><b>{{ date('d-M-Y', strtotime($with->created_at)) }}</b></td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>
<!-- table chart end -->
    </div>

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