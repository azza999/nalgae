<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>날개제 QR코드 페이지 이동</title>
</head>
<body>
	<script>
		var account = '{{ $account }}';
		var name = '{{ $name }}';
		var text = '{{ $text }}';
		var a = document.createElement('a')
		a.href = 'supertoss://bank='+name+'&accountNo='+account+'&origin=linkgen&msg='+text;
		a.innerHTML = 'supertoss://bank='+name+'&accountNo='+account+'&origin=linkgen&msg='+text;
		document.body.append(a);
		// a.click();
	</script>
</body>
</html>