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
    <form action="{{ route('withdraw.history') }}" method="POST">
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
      <h4 style="color: black">Withdraw History</h4><br><br>
      <table class="table">
          <thead style="background-color:bisque">
            <th>#</th>
            <th>Agent Name</th>
            <th>Client Name</th>
            <th>Send Mobile</th>
            <th>Payment</th>
            <th>Withdraw Amount</th>
            <th>Actual Amount</th>
            <th>Status</th>
            <th>Date</th>
          </thead>
          <tbody >
            @foreach($withdraws as $key => $with)
            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $with->agentWinInfo->name }}</td>
              <td>{{ $with->clientWinInfo->name }}</td>
              <td>{{ $with->number }}</td>
              <td>{{ $with->payment }}</td>
              <td>{{ $with->withdrawamount }}</td>
              <td >{{ $with->actualamount }}</td>
              <td>
                @if($with->status == 1)
                <form action="{{ route('withdraw.approve') }}" method="POST">
                  @csrf
                  <input type="hidden" name="winid" value="{{ $with->id }}">
                  <input type="hidden" name="clientid" value="{{ $with->clientid }}">
                  <input type="hidden" name="status" value="0">
                  <button class="btn btn-sm btn-primary">Approve</button>
                </form>
                @else
                <form action="{{ route('withdraw.approve') }}" method="POST">
                  @csrf
                  <input type="hidden" name="winid" value="{{ $with->id }}">
                  <input type="hidden" name="clientid" value="{{ $with->clientid }}">
                  <input type="hidden" name="status" value="1">
                  <button class="btn btn-sm btn-warning">Pending</button>
                </form>
                @endif
              </td>
              <td>{{ date('d-M-Y', strtotime($with->created_at)) }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>
<!-- table chart end -->
    </div>
@endsection