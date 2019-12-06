@extends('admin.layouts.app')
@section('content')
    <div class="container">
      <div class="row" style="margin-top: 100px;">
        <div class="col-md-6">
          {{-- <a class="btn btn-sm btn-success" href="{{ route('beating.create') }}">+Add</a> --}}
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
          @endif
        </div>
      </div>

<!-- table chart start -->
<div class="container table-chart" style="margin-top: 30px;">
  <h4>Bet Board</h4>
      <div class="row boxstyle">
      <table class="table" >
  <thead class="text-muted">
    <tr style="background-color:bisque;">
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      {{-- <th scope="col">Quantity</th> --}}
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($beats as $key => $beat)
      <tr>
        <td>{{ ++$key }}</td>
        <td>{{ $beat->name }}</td>
        <td>{{ $beat->price }}</td>
        {{-- <td>{{ $beat->quantity }}</td> --}}
        <td><a href="{{ URL::route('beating.edit', $beat->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i> Edit</a></td>
      </tr>
      @endforeach
  </tbody>
</table>
    </div>
</div>
<!-- table chart end -->
    </div>
    @endsection