@extends('layouts.layout')

@section('title','날개제.kr - 송금하기')

@section('content')
	
	<div class="container my-5">
		<div class="text-center my-5">
			<a href="#" id="btn" class="btn btn-primary">송금하기</a>
		</div>
	</div>

	<script>
		var account = '{{ $account }}';
		var name = '{{ $name }}';
		var text = '{{ $text }}';
		var btn = document.getElementById('btn')
		btn.href = 'supertoss://send?bank='+name+'&accountNo='+account+'&origin=linkgen&msg='+text;
		// document.body.append(btn);
		// btn.click();
	</script>
@endsection