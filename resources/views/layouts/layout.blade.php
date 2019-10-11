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
	
	{{-- css --}}
	<link rel="stylesheet" href="/public/css/app.css">	<!-- bootstrap -->
	<link rel="stylesheet" href="/public/css/style.css">

	 @yield('css')

</head>
<body>

	@yield('content')

	@yield('js')
</body>
</html>