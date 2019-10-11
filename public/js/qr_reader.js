$(document).ready(function() {
  navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia;

  /**
   * getUserMedia 성공
   * @param stream
   */
  function success(stream) {
    console.log('success', arguments);

    // For IOS safari (https://github.com/webrtc/samples/issues/929)
    if (DetectRTC.browser.isSafari) {
      video.setAttribute('playsinline', true);
      video.setAttribute('controls', true);

      setInterval(function() {
        video.removeAttribute('controls');
      }, 0);
    }

    // 비디오 테그에 stream 바인딩
    $('video')[0].srcObject = stream;
    // document.querySelector('video').srcObject = stream;

    // do something...
  }
  function error(error) {
    console.log('error', arguments);

    alert('카메라와 마이크를 허용해주세요');
  }

  console.log(navigator);

  if (DetectRTC.browser.isSafari) {
    navigator.mediaDevices.getUserMedia({ audio: true, video: true }, success, error);
  } else {
    navigator.getUserMedia({ audio: true, video: true }, success, error);
  }
});
