@extends('admin.layouts.app')
@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <a href="{{ route('agentcode.create') }}">Add</a>
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
          @endif
        </div>
      </div>
      <div class="row">
        <table class="table table-bordered table-responsible">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Mobile</th>
              <th>Email</th>
              <th>Agent Code</th>
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
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
@endsection