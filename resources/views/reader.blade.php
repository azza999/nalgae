@extends('layouts.layout')

@section('css')
	
@endsection

@section('content')
	<div class="container">
		<h1 class="text-center">QR코드 리더</h1>
		<div class="reader-view">
			<canvas id="canvas">
				
			</canvas>
		</div>
		<p id="loadingMessage" class="text-center">QR코드를 비춰주세요!</p>
		<p id="outputData" class="text-center"></p>
	</div>
@endsection

@section('js')
	<script src="/public/js/app.js"></script>
	<script src="/public/js/qr.js"></script>
	<script src="/public/js/qr_reader.js"></script>
@endsection

