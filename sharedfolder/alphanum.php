<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Finals</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    html, body {
      height: 100%;
      margin: 0;
    }

    .video-background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: -1;
    }

    .video-background video {
      min-width: 100%;
      min-height: 100%;
      width: auto;
      height: auto;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      object-fit: cover;
    }

    .main-wrapper {
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      height: 100vh;
    }

    .card {
      width: 100px;
      height: 100px;
      border-radius: 100%;
      background-color: #AF701D;
      box-shadow: inset -1px -3px 3px rgba(32, 15, 0, 0.5), inset 1px 3px 3px rgba(232, 225, 216, 0.5);
    }

    .btn-music {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      background-color: #2297EB;
      box-shadow: inset -2px -5px 4px rgba(16, 13, 106, 0.6), inset 10px 5px 4px rgba(232, 225, 216, .5);
      cursor: pointer;
      transition: transform 0.5s ease, background-color 0.3s ease;
    }

    .btn-music:hover {
      transform: scale(1.1);
    }

    .btn-music i {
      color: #ff9100;
      font-size: 32px;
    }

    .audio-background {
      display: none;
    }
  </style>
</head>

<body>
  <div class="video-background">
    <video autoplay loop muted playsinline src="background/bgvideo.mp4"></video>
  </div>

  <div class="audio-background">
    <audio id="bgAudio" loop src="background/bgaudio.mp3"></audio>
  </div>

  <div class="main-wrapper">
    <div class="container mb-4">
      <div class="row">
        <div class="col d-flex flex-row justify-content-center flex-wrap gap-3">

          <div class="card p-2 d-flex align-items-center justify-content-center">
            <button class="btn btn-music" onclick="toggleMusic(this)">
              <i class="fas fa-volume-high"></i>
            </button>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script>
    function toggleMusic(button) {
      const audio = document.getElementById('bgAudio');
      const icon = button.querySelector('i');

      if (audio.paused) {
        audio.play();
        icon.classList.remove('fa-volume-xmark');
        icon.classList.add('fa-volume-high');
        button.style.backgroundColor = '#2297EB';
      } else {
        audio.pause();
        icon.classList.remove('fa-volume-high');
        icon.classList.add('fa-volume-xmark');
        button.style.backgroundColor = '#D80303';
      }
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
</body>

</html>
