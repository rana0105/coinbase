@extends('admin.layouts.app')
@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <a href="{{ route('agentcode.create') }}">Add</a>
        </div>
      </div>
      <div class="row">
        <table class="table table-bordered table-responsible">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Code</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>01</td>
              <td>Test</td>
              <td>0101</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
@endsection