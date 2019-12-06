@extends('agent.layouts.app')
@section('content')
    <div class="container">
      <div class="row" style="margin-top: 100px;">
        <div class="col-md-6">
          {{-- <a class="btn btn-sm btn-success" href="{{ route('agent.fund.transfer') }}">Add</a> --}}
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
          @endif
        </div>
      </div>

<!-- table chart start -->
<div class="container table-chart" style="margin-top: 30px;">
  <form action="{{ route('agent.client.fund.history') }}" method="POST">
      @csrf
      <div class="row boxstyle">
        <div class="col-md-3">
          <input type="text" name="key" class="form-control" placeholder="Enter Mobile or Ref Code">
        </div>
        <div class="col-md-1">
            <p style="margin-top:10px;">From</p>
          </div>
        <div class="col-md-3">
          <input type="date" name="from_date" class="form-control" placeholder="From Date">
        </div>
        <div class="col-md-1">
            <p style="margin-top:10px;">To</p>
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
        <h4 style="color: black">Transaction History</h4> <br><br>
      <table class="table" >
       
        {{-- {{ Auth::user()->id }} --}}
  <thead>
    <tr style="background-color:bisque;">
      <th>#</th>
      <th>Name</th>
      <th>Mobile</th>
      <th>Code</th>   
      <th>Amount</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
      @foreach($clientFundhistory as $key => $client)
      <tr>
        <td>{{ ++$key }}</td>
        <td>{{ $client->clientuserhistory->name }}</td>
        <td>{{ $client->clientuserhistory->mobile }}</td>
        <td>{{ $client->clientuserhistory->usercode }}</td>
        <td>{{ $client->amount }}</td>
        <td >{{ date('d-M-Y', strtotime($client->created_at)) }}</td>
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
        <hr>
      <div class="row">
        <div class="col-md-4">
          <h5>coinbaseclub</h5>
          <p>+1 (888) 908-7000 <br>support@coinbaseclub.com <br>© 2019 Coinbaseclub </p>
          {{-- <p><a href="">support.coinbaseclub.com</a></p>
          <p></p> --}}
        </div>
        <div class="col-md-2 text-color" >
          <h6>Products</h6><br>
          <a href="">Coinbaseclub</a>
          <a href="">Commerce</a><br>
          <a href="">Custody</a><br>
        </div>
        <div class="col-md-2 text-color">
         <h6>Learn</h6><br>
         <a href="">Buy Bitcoin</a><br>
          <a href="">Buy Bitcoin Cash</a><br>
          <a href="">Buy Ethereum</a><br>
        </div>
        <div class="col-md-2 text-color">
         <h6> Company</h6><br>
         <a href="">About</a><br>
          <a href="">Affiliates</a><br>
          <a href="">Careers</a><br>
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