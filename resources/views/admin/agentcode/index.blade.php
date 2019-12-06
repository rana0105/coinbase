@extends('admin.layouts.app')
@section('content')
    <div class="container">
      <div class="row" style="margin-top: 100px;">
        <div class="col-md-6">
          <a class="btn btn-sm btn-success" href="{{ route('agentcode.create') }}"> Create New Agent</a>
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
          @endif
        </div>
      </div>

<!-- table chart start -->
<div class="container table-chart" style="margin-top: 30px;">
  <h4>All Agent List</h4>
      <div class="row boxstyle">
      <table class="table" >
  <thead class="text-muted">
    <tr style="background-color:bisque">
      <th>#</th>
      <th>Name</th>
      <th>Mobile</th>
      <th>Email</th>
      <th>Agent Code</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
      @foreach($agentcodes as $key => $agent)
      <tr>
        <td>{{ ++$key }}</td>
        <td>{{ $agent->name }}</td>
        <td>{{ $agent->mobile }}</td>
        <td>{{ $agent->email }}</td>
        <td>{{ $agent->agentcode }}</td>
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