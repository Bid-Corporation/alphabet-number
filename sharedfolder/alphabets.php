<?php
require_once __DIR__ . '/../connect.php';
$sql = "SELECT alphabetsID, alphabets, alphabetsWord
        FROM   alphabetsNumbers
        ORDER  BY alphabets";
$alphabetsResult = mysqli_query($conn, $sql)
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alphabets</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="../style-alphabets.css">
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

  <div class="container-fluid alphabet-home">
    <div class="container text-center">
      <div class="row my-3">
        <div class="col-12 col-md-6 col-lg-4 mx-auto">
          <div class="alphabet-container p-3">
            <div class="alphabet-title p-3 text-center">Alphabets</div>
          </div>
        </div>
      </div>

      <div class="button-container" id="alphabet-buttons">
        <?php
        if (mysqli_num_rows($alphabetsResult) == 0) {
          echo '<p class="text-muted">No records found.</p>';
        } else {
          while ($row = mysqli_fetch_assoc($alphabetsResult)) {

            $letter = htmlspecialchars($row['alphabets']);
            $word   = htmlspecialchars($row['alphabetsWord']);
            $link   = 'perletters.php?char=' . rawurlencode($letter);

            echo <<<HTML
                    <a href="{$link}" target="_self" title="{$word}">
                      <button class="alphabet-button rounded-5">{$letter}</button>
                    </a>
                  HTML;
          }
        }
        ?>
      </div>

      <div class="row justify-content-center my-4">
        <div class="col-auto">
          <div class="card-back">
            <div class="back-button">
              <a href="alphanum.php">
                <i class="fa-solid fa-arrow-left"></i>
              </a>
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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>