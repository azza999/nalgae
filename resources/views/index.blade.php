@extends('layouts.layout')

@section('css')
	
@endsection

@section('content')
<main class="poster container">
	<img src="/public/img/poster.png" alt="포스터 이미지">
</main>
<div class="map container">
	<div class="section-title">
		<h2>항과고 약도</h2>
	</div>
	<img src="/public/img/map.png" alt="">
</div>
<div class="calendar container" id="calendar">
	<div class="section-title">
		<h2>날개제 일정</h2>
	</div>
	<img src="/public/img/calendar.png" alt="">
</div>
@endsection

@section('js')

@endsection