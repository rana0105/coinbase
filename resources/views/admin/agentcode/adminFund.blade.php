@extends('admin.layouts.app')
@section('content')
 <div class="container" >
    {{-- <h3 class="h3style">Create your account</h3><br> --}}
    <div class="row col-md-12">
      <div class="col-md-3 boxstyle">
        <h4 style="color:green">Admin Amount:- {{ $checkAdminAmount ? $checkAdminAmount->adminamount : '0000'}}</h4>
        @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
          @endif
      </div>
      <div class="col-md-6 boxstyle" style="margin-left: 10px;">
        <form class="form-horizontal col-md-12"  form method="POST" action="{{ route('admin.fund.store') }}" >
           @csrf
          <div class="form-group">
            <label for="email">Amount</label>
            <input id="amount" type="number" class="form-control @error('amount') is-invalid @enderror" name="adminamount" value="" required autocomplete="amount" placeholder="Enter your amount">
            @if($checkAdminAmount != null)
            <input id="amount" type="hidden"  name="id" value="{{ $checkAdminAmount->id }}">
            @endif               
            @error('amount')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <button  class="btn btn-primary my-4 btn-block " type="submit">Save</button>
          
        </form>
      </div>
      
    </div><br>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 boxstyle">
        <table class="table" >
        <h4 style="color: green">Admin Fund History</h4>
          <thead class="text-muted">
            <tr>
              <th>#</th>
              <th>Amount</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
              @foreach($adminFunds as $key => $admin)
              <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $admin->adminamount }}</td>
                <td style="color:green;"><b>{{ date('d-M-Y', strtotime($admin->created_at)) }}</b></td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
    
  </div>

@endsection