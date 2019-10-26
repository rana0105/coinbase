@extends('client.layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped table-responsive">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Mobile</th>
              <th>Ref:Code</th>
              <th>Agent Code</th>
              <th>Country</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ $updateProfile->name }}</td>
              <td>{{ $updateProfile->email }}</td>
              <td>{{ $updateProfile->mobile }}</td>
              <td>{{ $updateProfile->refcode }}</td>
              <td>{{ $updateProfile->agentcode }}</td>
              <td>{{ $updateProfile->country }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row"></div>
  </div>
@endsection