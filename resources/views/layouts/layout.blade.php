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
	<link rel="stylesheet" href="/public/css/styles.css">

	 @yield('css')

</head>
<body>
	<div class="header-padder"></div>
	<header>
		<div class="container">
			<div class="logo d-flex justify-content-between mt-3">
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
			<nav class="nav justify-content-around mt-1">
				<a href="/intro" class="nav-item">소개</a>
				<div id="go-calendar" class="nav-item">일정표</div>
				<a href="/parade" class="nav-item">퍼레이드</a>
				<a href="/stamp" class="nav-item">스탬프 투어</a>
				<a href="/exhibit" class="nav-item">전시회</a>
				<a href="/QnA" class="nav-item">Q&A</a>
			</nav>
		</div>
	</header>

	@yield('content')

	@yield('js')

	<script>
		$('#go-calendar').on('click',function(e) {
			e.preventDefault();
			if (location.href.match(/home$/) === null) {
				location.href = "https://xn--h49aq9fm9y.kr/home#calendar";
			} else {
				$('html, body').animate('scrollTop',$('#calendar').offset().top,400);
			}
		});
	</script>
	
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