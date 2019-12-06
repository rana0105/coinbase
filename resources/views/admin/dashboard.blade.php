@extends('admin.layouts.app')

@section('content')
<div class="container">
  @if (session('status'))
<div class="alert alert-success" role="alert">
  {{ session('status') }}
</div>
@endif 

<br><br><br><br><br>
<div class="container table-chart" style="margin-top: 30px;">
  <div class="row boxstyle">
  <table class="table" >
    <h4 style="color: black">Bet Win Board</h4><br><br>
<thead class="text-muted">
<tr style="background-color:bisque">
  <th>#</th>
  {{-- <th>Bet ID</th> --}}
  <th>Bet Name</th>
  <th>Bet Count</th>
  <th>Bet Amount</th>
  <th>Date</th>
  <th>Action</th>
</tr>
</thead>
<tbody>
  @foreach($betHold as $key => $bet)
  <tr>
    <td>{{ ++$key }}</td>
    {{-- <td>{{ $bet->betid }}</td> --}}
    <td>{{ $bet->betname }}</td>
    <td>{{ $bet->bcount }}</td>
    <td>{{ $bet->bamount }}</td>
    <td>{{ date('d-M-Y', strtotime($bet->created_at)) }}</td>
    <td>
      <form action="{{ route('bet.win') }}" method="POST">
        @csrf
        <input type="hidden" name="betid" value="{{ $bet->betid }}">
        <button class="btn-success btn4">Win</button>
      </form>
    </td>
  </tr>
  @endforeach
</tbody>
</table>
</div>
</div>
<!-- table chart end -->
</div>