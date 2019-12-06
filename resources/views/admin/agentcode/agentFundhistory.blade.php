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
    <form action="{{ route('agent.fund.history') }}" method="POST">
      @csrf
      <div class="row boxstyle">
        <div class="col-md-3">
          <input type="text" name="key" class="form-control" placeholder=" Enter Agent Code">
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
        <h4 style="color: black"> Fund Transfer History</h4><br><br>
        <thead class="text-muted">
          <tr style="background-color:bisque">
            <th>#</th>
            <th>From Admin</th>
            <th>Agent Name</th>
            <th>Agent Code</th>
            <th>Agent Mobile</th>
            <th>Amount</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
            @foreach($agentFundhistory as $key => $agent)
            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $agent->adminuserh->name }}</td>
              <td>{{ $agent->agentuserhistory->name }}</td>
              <td>{{ $agent->agentuserhistory->agentcode }}</td>
              <td>{{ $agent->agentuserhistory->mobile }}</td>
              <td>{{ $agent->amount }}</td>
              <td >{{ date('d-M-Y', strtotime($agent->created_at)) }}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
<!-- table chart end -->
</div>
@endsection