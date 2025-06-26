<?php
include("connect.php");
$alphaSql = "SELECT alphabetsID, alphabets, alphabetsWord
             FROM   alphabetsNumbers
             ORDER  BY alphabetsID";
$alphaRes = mysqli_query($conn, $alphaSql);

$numSql   = "SELECT numberID, numberValue, numberWord
             FROM   numberWords
             ORDER  BY numberValue";
$numRes   = mysqli_query($conn, $numSql);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin • Database Tables</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">

  <style>
    .table-wrapper {
      backdrop-filter: blur(6px);
      background: rgba(255, 255, 255, 0.15);
      border-radius: 1.5rem;
      padding: 2rem;
      overflow-x: auto;
    }
    .admin-title {
      color: #fff;
      text-shadow: 1px 1px 3px rgba(0,0,0,.8);
    }
  </style>
</head>

<body>
  <div class="video-background">
    <video autoplay loop muted playsinline src="background/bgvideo.mp4"></video>
  </div>
  <div class="audio-background">
    <audio id="bgAudio" loop src="background/bgaudio.mp3" autoplay></audio>
  </div>

  <div class="container-fluid py-5">
    <h1 class="admin-title text-center mb-5 fw-semibold">Database Overview</h1>
    <div class="container mb-5 table-wrapper">
      <h2 class="h4 text-white mb-3">Alphabets Table</h2>
      <table class="table table-hover table-bordered table-dark table-striped align-middle mb-0">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Letter</th>
            <th scope="col">Word</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_assoc($alphaRes)): ?>
          <tr>
            <td><?= htmlspecialchars($row['alphabetsID']) ?></td>
            <td><?= htmlspecialchars($row['alphabets']) ?></td>
            <td><?= htmlspecialchars($row['alphabetsWord']) ?></td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>

    <div class="container table-wrapper">
      <h2 class="h4 text-white mb-3">Numbers Table</h2>
      <table class="table table-hover table-bordered table-dark table-striped align-middle mb-0">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Number</th>
            <th scope="col">Word</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_assoc($numRes)): ?>
          <tr>
            <td><?= htmlspecialchars($row['numberID']) ?></td>
            <td><?= htmlspecialchars($row['numberValue']) ?></td>
            <td><?= htmlspecialchars($row['numberWord']) ?></td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>

    <div class="row justify-content-center mt-5">
      <div class="col-auto">
        <div class="card-back">
          <button class="btn btn-admin" onclick="location.href='index.php'">
            <i class="fas fa-house"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
