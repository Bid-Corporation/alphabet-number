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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>