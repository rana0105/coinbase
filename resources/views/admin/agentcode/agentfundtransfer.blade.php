@extends('admin.layouts.app')
@section('content')
 <div class="container" >
    {{-- <h3 class="h3style">Create your account</h3><br> --}}
    <div class="row col-md-12">
      <div class="col-md-3">
      </div>
      <div class="col-md-6 boxstyle">
        <form class="form-horizontal col-md-12"  form method="POST" action="{{ route('agent.fund.store') }}" >
           @csrf
          <div class="form-group">
            <label>Agent List</label>
            <select id="to_agent" type="text" class="form-control @error('to_agent') is-invalid @enderror" name="to_agent" value="{{ old('to_agent') }}" required autocomplete="to_agent" autofocus>
              <option value="">--Select Agent List--</option>
              @foreach($agentcode as $agent)
              <option value="{{ $agent->id }}">{{ $agent->mobile }} - {{ $agent->name }} - {{ $agent->agentcode }}</option>
              @endforeach
            </select>
                
            @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="amount">Aamount</label>
            <input id="amount" type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount" placeholder="Enter your amount">
                
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
    
  </div>

@endsection