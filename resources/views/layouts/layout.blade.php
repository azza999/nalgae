<!DOCTYPE html>
<html lang="ko">
<head>
	<title>@yield('title','날개제.kr')</title>
	
	
	{{-- 메타 태그  세팅 --}}
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width">
	<meta name="title" content="날개제">
	<meta name="keyword" content="날개제, 공군, 공군 항공과학고등학교">
	<meta name="description" content="날개제 웹사이트">

	<script>
		if (location.protocol === 'http:') {
			location.protocol = 'https:';
		}
	</script>
	
	{{-- css --}}
	<link rel="stylesheet" href="/public/css/app.css">	<!-- bootstrap -->
	<link rel="stylesheet" href="/public/css/style.css">

	 @yield('css')

</head>
<body>
	<div class="header-padder"></div>
	<header>
		<div class="container">
			<div class="row pt-3">
				<div class="logo col-md-12 col-12 d-flex justify-content-between">
					<a class="header-btn" href="{{route('home')}}">
						<img src="/public/img/home.svg" alt="1">
					</a>
					<a href="{{route('home')}}" class="logo-box">
						<img src="/public/img/logo.png" alt="">
					</a>
					<a class="header-btn" href="{{route('reader')}}">
						<img src="/public/img/QRQR.png" alt="qr code reader">
					</a>
				</div>
				<nav class="nav col-12 justify-content-around mt-3">
					<a href="#" class="nav-item">일정표</a>
					<a href="#" class="nav-item">약도</a>
					<a href="#" class="nav-item">퍼레이드</a>
					<a href="#" class="nav-item">스탬프 투어</a>
					<a href="#" class="nav-item">전시회</a>
					<a href="#" class="nav-item">Q&A</a>
				</nav>
			</div>
		</div>
	</header>

	@yield('content')

	@yield('js')
	
	<footer>
		<div class="contact">
			<div class="container">
				<div class="mx-5">
					<p class="mb-3 pt-3 text-center">공군 항공과학고등학교 날개제 위원회</p>
					<p class="mb-1">주소&nbsp;&nbsp;&nbsp;경남 진주시 금산면 송백로 44-3</p>
					<p class="m-0 pb-3">전화&nbsp;&nbsp;&nbsp;055-750-2121</p>
				</div>
			</div>
		</div>
		<div class="copy">
			<div class="container text-center p-3">
				<p>azzadh999@gmail.com</p>
				<p>2019 AFASHS 김도현, All Rights Reserved | 36th AFASHS ASSEMBLE</p>
			</div>
		</div>
	</footer>
</body>
</html>