@extends('admin.layouts.app')
@section('content')
    <div class="container">
      <div class="row" style="margin-top: 100px;">
        <div class="col-md-6">
          <a class="btn btn-sm btn-success" href="{{ route('agent.fund.transfer') }}">Fund Transfer </a>
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
          @endif
        </div>
      </div>

<!-- table chart start -->
<div class="container table-chart" style="margin-top: 30px;">
  <form action="{{ route('show.agent.fund.transfer') }}" method="POST">
      @csrf
      <div class="row boxstyle">
        <div class="col-md-3">
          <input type="text" name="key" class="form-control" placeholder="Input Agent Code">
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
      <div class="row boxstyle" style="margin-top: 10px;">
      <table class="table" >
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
      @foreach($agentfunds as $key => $agent)
      <tr>
        <td>{{ ++$key }}</td>
        <td>{{ $agent->adminuser->name }}</td>
        <td>{{ $agent->agentuser->name }}</td>
        <td>{{ $agent->agentuser->agentcode }}</td>
        <td>{{ $agent->agentuser->mobile }}</td>
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