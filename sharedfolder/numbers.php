<?php
require_once __DIR__ . '/../connect.php';
$sql = "SELECT numberID, numberValue, numberWord
        FROM   numberWords
        ORDER  BY numberValue";
$numbersResult = mysqli_query($conn, $sql)
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Numbers</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="../style-numbers.css">
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

  <div class="container-fluid number-home">
    <div class="container text-center">

      <div class="row my-3">
        <div class="col-12 col-md-6 col-lg-4 mx-auto">
          <div class="number-container p-3">
            <div class="number-title py-3 text-center">Numbers</div>
          </div>
        </div>
      </div>

      <div class="numbers-container mx-auto my-3">
        <?php
        while ($row = mysqli_fetch_assoc($numbersResult)) {

          $num     = htmlspecialchars($row['numberValue']);
          // $numWord = htmlspecialchars($row['numberWord']);   
          $link    = 'pernumbers.php?num=' . rawurlencode($num);
        ?>
          <a href="<?php echo $link; ?>" target="_self" title="<?php echo $numWord; ?>">
            <button class="numbers-button rounded-5"><?php echo $num; ?></button>
          </a>
        <?php
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