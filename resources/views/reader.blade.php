@extends('layouts.layout')

@section('css')
	<style>
		.reader { width: 100%; padding: 30px 20px; }
		#outputData { max-width: 100%; }
	</style>
@endsection

@section('content')
	<div class="container text-center reader">
		<div class="section-title">
			<h2 class="text-center">QR코드 리더</h2>
		</div>
		<div class="reader-view text-center">
			<canvas id="canvas" style="max-width: 100%;">
				
			</canvas>
			<video id="video" muted hidden></video>
		</div>
		<p id="loadingMessage" class="text-center">QR코드를 비춰주세요!</p>
		<p id="outputData" class="text-center"></p>
		<a href="supertoss://send?bank=신한&accountNo=110473324141&origin=linkgen&msg=test">되라제발</a>
	</div>
@endsection

@section('js')

	<script src="/public/js/adaptor.js"></script>
	<script src="/public/js/DetectRTC.js"></script>
	<script src="/public/js/jquery-3.4.1.min.js"></script>
	<script src="/public/js/qr.js"></script>
	<script src="/public/js/qr_reader.js"></script>

@endsection

