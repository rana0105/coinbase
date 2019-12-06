@extends('agent.layouts.app')

@section('content')
<div class="container">
  @if (session('status'))
<div class="alert alert-success" role="alert">
  {{ session('status') }}
</div>
@endif    

    <div class="row col-md-12">
      <div class="col-md-3">
      </div>
      <div class="col-md-6 boxstyle">

        <form class="form-horizontal col-md-12"  form method="POST" action="{{ route('agent.to.client.store') }}" >
           @csrf
          <div class="form-group">
            <label>Client List</label>
            <select id="to_client" type="text" class="form-control @error('to_client') is-invalid @enderror" name="to_client" value="{{ old('to_client') }}" required autocomplete="to_client" autofocus>
              <option value="">--Select Client List--</option>
              @foreach($clients as $client)
              <option value="{{ $client->id }}">{{ $client->mobile }} - {{ $client->name }} - {{ $client->usercode }}</option>
              @endforeach
            </select>
                
            @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="amount">Amount</label>
            <input id="amount" type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" min="0" required autocomplete="amount" placeholder="Enter amount">
                
            @error('amount')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <button  class="btn  my-4 btn-block " style="background-color:bisque;" type="submit">Save</button>
          
        </form>
      </div>
      
    </div><br>
@endsection
