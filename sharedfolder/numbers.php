<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Numbers</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="../style-numbers.css">
</head>

<body>
  
  <div class="video-background">
    <video autoplay loop muted playsinline src="../background/bgvideo.mp4"></video>
  </div>

  
  <div class="audio-background">
    <audio id="bgAudio" loop src="../background/bgaudio.mp3"></audio>
  </div>

  <div class="container-fluid number-home">
    <div class="container text-center">

      <div class="row my-3">
        <div class="col-12 col-sm-6 mx-auto">
          <div class="alphabet-title py-3 text-center">Numbers</div>
        </div>
      </div>

      <div class="numbers-container mx-auto my-3">
        <?php
          $numbers = range(0, 9);
          foreach ($numbers as $num) {
              echo '<a href="pernumbers.php?num=' . $num . '" target="_self">
                      <button class="numbers-button rounded-5">' . $num . '</button>
                    </a>';
          }
        ?>
      </div>
      <div class="row justify-content-center my-4">
        <div class="col-auto">
          <div class="card-back">
            <a href="alphanum.php" class="back-button">
              <i class="fa-solid fa-arrow-left"></i>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
