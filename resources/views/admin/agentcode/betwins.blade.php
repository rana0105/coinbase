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
    {{-- <form action="{{ route('bet.win.history') }}" method="POST">
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
    </form> --}}
    <div class="row boxstyle" style="margin-top: 30px;">
          <h4 style="color: black">Win History</h4><br><br>
      <table class="table" > 
        <thead class="text-muted">
          <tr style="background-color:bisque">
            <th scope="col">#</th>
            <th scope="col">Bet Name</th>
            <th scope="col">Bet Qty</th>
            <th scope="col">Bet Amount</th>
            <th scope="col">Win Date</th>
          </tr>
        </thead>
        <tbody>
          @foreach($betWins as $key => $win)
          <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $win->name }}</td>
            <td>{{ $win->totalbet }}</td>
            <td>{{ $win->totalbetamount }}</td>
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