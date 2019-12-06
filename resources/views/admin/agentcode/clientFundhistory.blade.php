@extends('admin.layouts.app')
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
    <form action="{{ route('client.fund.history') }}" method="POST">
      @csrf
      <div class="row boxstyle">
        <div class="col-md-3">
          <input type="text" name="key" class="form-control" placeholder="Input Agent or client">
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
      <table class="table" >
        <h4 style="color: black"> Agent To Client Fund Transfer History</h4><br><br>
        <thead class="text-muted">
          <tr style="background-color:bisque">
            <th>#</th>
            <th>Agent Name</th>
            <th>Client Name</th>
            <th>Client Mobile</th>
            <th>Amount</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
            @foreach($clientFundhistory as $key => $client)
            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $client->agentuserh->name }}</td>
              <td>{{ $client->clientuserhistory->name }}</td>
              <td>{{ $client->clientuserhistory->mobile }}</td>
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

@endsection