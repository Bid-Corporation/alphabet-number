<?php
require_once __DIR__ . '/../connect.php';
$char = isset($_GET['num']) ? (int)$_GET['num'] : null;
$stmt = mysqli_prepare($conn, "SELECT numberValue, numberWord FROM numberWords WHERE numberValue = ? LIMIT 1");
mysqli_stmt_bind_param($stmt, 'i', $char);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($result)) {
    $char = htmlspecialchars($row['numberValue']);
    $word = htmlspecialchars($row['numberWord']);
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
  <title>Number <?= $char ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="../style-perletters.css">
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
            <div class="card-red">
              <div class="card-right m-5 d-flex justify-content-center align-items-center me-4">
                <h1 style="color:#fee527;font-size:6rem;margin:0;"><?= $char ?></h1>
              </div>
              <div class="d-flex align-items-center">
                <h1 style="color:#fee527;font-size:3rem;margin:0;">is for <?= $word ?></h1>
              </div>
            </div>
            <div class="card-buttons">
              <div class="card-back">
                <a href="numbers.php" class="btn btn-back">
                  <i class="fas fa-arrow-left"></i>
                </a>
              </div>
              <div class="card-home">
                <a href="alphanum.php" class="btn btn-home">
                  <i class="fas fa-house"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
