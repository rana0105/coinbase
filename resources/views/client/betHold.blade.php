<form action="{{ route('bet.hold') }}" method="POST">
  @csrf
  {{ $bet }}
  <input type="text" name="betid" value="{{ $bet->id }}">
  <input type="text" name="betid" value="{{ $bet->price }}">
  <input type="text" name="betid" value="">
  <div class="number">
		<span class="minus">-</span>
		<input type="text" value="1"/>
		<span class="plus">+</span>
	</div>
  {{-- <input type="hidden" name="betname" value="{{ $bets[4]['name']}}">
  <input type="hidden" name="betprice" value="{{ $bets[4]['price']}}"> --}}
  <button class="btn-success btn4">Buy</button>
</form>
@section('script')
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
    $(document).ready(function(){

      $('.minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
      });
      $(document).on('click', 'span.plus', function() {
        alert('ssssss');
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
      });
       
    });
</script>
@endsection