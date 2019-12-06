@extends('admin.layouts.app')
@section('content')
    <div class="container">
      <div class="row" style="margin-top: 100px;">
        <div class="col-md-6">
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
          @endif
        </div>
      </div>

<!-- table chart start -->
<div class="container table-chart" style="margin-top: 30px;">
    <form action="{{ route('bet.win.history') }}" method="POST">
      @csrf
      <div class="row boxstyle">
        <div class="col-md-3">
          <input type="text" name="key" class="form-control" placeholder="Input Client Name & Code">
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
        <h4 style="color: black">Bet Win History</h4><br><br>
        <thead class="text-muted">
          <tr style="background-color:bisque">
            <th scope="col">#</th>
            <th scope="col">Client Name</th>
            <th scope="col">Client Code</th>
            <th scope="col">Client Mobile</th>
            <th scope="col">Amount</th>
            <th scope="col">Win Date</th>
          </tr>
        </thead>
        <tbody>
            @foreach($betWinHistory as $key => $win)
            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $win->clientWinInfo->name }}</td>
              <td>{{ $win->clientWinInfo->usercode }}</td>
              <td>{{ $win->clientWinInfo->mobile }}</td>
              <td>{{ $win->bamount }}</td>
              <td >{{ date('d-M-Y', strtotime($win->created_at)) }}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
</div>
<!-- table chart end -->
    </div>

@endsection