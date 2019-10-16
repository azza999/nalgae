<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>날개제 QR코드 페이지 이동</title>
</head>
<body>
	<script>
		var url = '{!! $code !!}';
		var a = document.createElement('a')
		a.href = url;
		document.body.append(a);
		a.click();
	</script>
</body>
</html>