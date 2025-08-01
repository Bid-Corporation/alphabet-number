<?php
require_once __DIR__ . '/../connect.php';

$char = isset($_GET['char']) ? $_GET['char'] : 'Aa';

$stmt = mysqli_prepare($conn, "SELECT alphabetsWord FROM alphabetsNumbers WHERE alphabets = ? LIMIT 1");
mysqli_stmt_bind_param($stmt, 's', $char);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($result)) {
  $word = htmlspecialchars($row['alphabetsWord']);
  $char = htmlspecialchars($char);
} else {
  $word = 'Unknown';
  $char = htmlspecialchars($char);
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Letter <?= $char ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="../style-perletters.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&display=swap" rel="stylesheet">
</head>

<body>
  <div class="video-background">
    <video autoplay loop muted playsinline src="../background/bgvideo.mp4"></video>
  </div>

  <div class="audio-background">
    <audio id="bgAudio" loop src="../background/bgaudio.mp3"></audio>
  </div>

  <div class="main-wrapper">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card-letters">
            <div class="card-red" style="width: 650px">
              <div class="card-right m-0 d-flex justify-content-center align-items-center m-4">
                <h1 style="color:#fee527;font-size:clamp(6rem, 10vw, 10rem);margin:0;"><?= $char ?></h1>
              </div>
              <div class="d-flex align-items-center text-center">
                <h1 style="color:#fee527;font-size:clamp(2.6rem, 4vw, 3.6rem);margin:0;">is for <?= $word ?></h1>
              </div>
            </div>
            <div class="card-buttons">
              <div class="card-back">
                <a href="alphabets.php" class="btn btn-back">
                  <i class="fas fa-arrow-left"></i>
                </a>
              </div>
              <div class="card-home">
                <a href="../index.php" class="btn btn-home">
                  <i class="fas fa-house"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<script>
    window.addEventListener('DOMContentLoaded', () => {
        const audio = document.getElementById('bgAudio');

        // Attempt to autoplay
        audio.play().catch(err => {
            console.warn("Autoplay failed (likely due to browser policy):", err);
        });
    });

    function toggleMusic(button) {
        const audio = document.getElementById('bgAudio');
        const icon = button.querySelector('i');

        if (audio.paused) {
            audio.play().then(() => {
                icon.classList.remove('fa-volume-xmark');
                icon.classList.add('fa-volume-high');
                button.classList.remove('muted');
                button.classList.add('unmuted');
            }).catch(err => {
                console.error("Audio play failed:", err);
            });
        } else {
            audio.pause();
            icon.classList.remove('fa-volume-high');
            icon.classList.add('fa-volume-xmark');
            button.classList.remove('unmuted');
            button.classList.add('muted');
        }
    }
</script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>