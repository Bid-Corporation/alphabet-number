<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Finals</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="../style-alphanum.css">
</head>

<body>
  <div class="video-background">
    <video autoplay loop muted playsinline src="../background/bgvideo.mp4"></video>
  </div>

  <div class="audio-background">
    <audio id="bgAudio" loop src="../background/bgaudio.mp3"></audio>
  </div>

  <div class="main-wrapper d-flex flex-column justify-content-center align-items-center text-center">
    <div class="d-flex justify-content-center gap-4 flex-wrap mb-4">
      <div class="card-alphabet">
        <a href="alphabets.php" class="alphabet-button">
          <span class="button-label">Alphabets</span>
        </a>
      </div>
      <div class="card-number">
        <a href="numbers.php" class="number-button">
          <span class="button-label">Numbers</span>
        </a>
      </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
      <div class="card-back">
        <a href="../index.php" class="back-button" title="Go Back">
          <i class="fas fa-arrow-left" aria-label="Go back"></i>
        </a>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
