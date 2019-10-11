$(document).ready(e=>{

  var video = document.getElementById("video");

  var canvasElement = document.getElementById("canvas");

  var canvas = canvasElement.getContext("2d");

  var message = document.getElementById("loadingMessage");

  var outputData = document.getElementById("outputData");

  console.log(video,canvasElement,message,outputData);

    

  function drawLine(begin, end, color) {

    canvas.beginPath();

    canvas.moveTo(begin.x, begin.y);

    canvas.lineTo(end.x, end.y);

    canvas.lineWidth = 4;

    canvas.strokeStyle = color;

    canvas.stroke();

  }
  
  navigator.getUserMedia({ audio: true, video: true }, function success(stream) {
    console.log('success', arguments);

      // 비디오 테그에 stream 바인딩
    video.srcObject = stream;
    video.setAttribute("playsinline", true);      // iOS 사용시 전체 화면을 사용하지 않음을 전달

    video.play();

    video.ontimeupdate = tick;

  }, function error(error) {

      console.log('error', arguments);
      alert('카메라와 마이크를 허용해주세요');
      location.reload();

  });

  setTimeout(function() {
    tick();
  }, 0);

  function tick() {

    if(video.readyState === video.HAVE_ENOUGH_DATA) {

      // 읽어들이는 비디오 화면의 크기

      canvasElement.height = video.videoHeight;

      canvasElement.width = video.videoWidth;

            

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

        // QR코드 메시지 출력

        outputData.innerHTML = code.data;

        if (/^https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)$/) {
          location.href = code.data;
        }

        return;

      } else {
        console.log('none');
      }
    }
  }
});