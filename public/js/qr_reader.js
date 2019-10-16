$(document).ready(function(e){

	var data = "";

	var video = document.getElementById("video");

	var canvasElement = document.getElementById("canvas");

	var canvas = canvasElement.getContext("2d");

	var message = document.getElementById("loadingMessage");

	var outputData = document.getElementById("outputData");

	function drawLine(begin, end, color) {

		canvas.beginPath();

		canvas.moveTo(begin.x, begin.y);

		canvas.lineTo(end.x, end.y);

		canvas.lineWidth = 4;

		canvas.strokeStyle = color;

		canvas.stroke();

	}
	
	navigator.getUserMedia({ video: {facingMode: "environment"}}, function success(stream) {

		console.log('success', arguments);

		// 비디오 테그에 stream 바인딩
		video.srcObject = stream;

		video.setAttribute("playsinline", true);      // iOS 사용시 전체 화면을 사용하지 않음을 전달

		video.play();

		tick();

	}, function error(error) {

			alert(JSON.stringify(arguments));

			location.reload();

	});

	tick();

	var flag = true;

	function tick() {

		if(video.readyState === video.HAVE_ENOUGH_DATA) {

			// 읽어들이는 비디오 화면의 크기

			canvasElement.height = video.videoHeight * 0.8;

			canvasElement.width = video.videoWidth * 0.8;

			canvas.drawImage(video, 0, 0, canvasElement.width, canvasElement.height);

			var imageData = canvas.getImageData(0, 0, canvasElement.width, canvasElement.height);

			var code = jsQR(imageData.data, imageData.width, imageData.height, {
				inversionAttempts : "dontInvert",
			});

			// QR코드 인식에 성공한 경우

			if(code) {
		
				// 인식한 QR코드의 영역을 감싸는 사용자에게 보여지는 테두리 생성
				drawLine(code.location.topLeftCorner, code.location.topRightCorner, "#FF0000");

				drawLine(code.location.topRightCorner, code.location.bottomRightCorner, "#FF0000");

				drawLine(code.location.bottomRightCorner, code.location.bottomLeftCorner, "#FF0000");

				drawLine(code.location.bottomLeftCorner, code.location.topLeftCorner, "#FF0000");

				// if (code.data.match('xn--h49aq9fm9y.kr') !== null) {

					// 자동이동은 한번만
					// if (flag = true) {
					// 	// 자동이동
					// 	var a = document.createElement('a');

					// 	a.href = code.data;
					// 	a.click();
					// 	flag = false
					// }

					// 자동이동 실패시
					alert(code.data);
					$('#link').attr('href',code.data);
					$('#link').css('display','block')
					console.log($('#link'),code.data);

				// }

			}
		}

		setTimeout(function() {
			tick();
		}, 10);
	}
});