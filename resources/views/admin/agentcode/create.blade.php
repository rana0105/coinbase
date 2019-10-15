@extends('admin.layouts.app')
@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>Agent Code</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <form action="{{ route('agentcode.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" placeholder="Input Title">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else'.</small>
            </div>
            <div class="form-group">
              <label for="code">Code</label>
              <input type="text" class="form-control" name="code" id="code" placeholder="Code">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
@endsection