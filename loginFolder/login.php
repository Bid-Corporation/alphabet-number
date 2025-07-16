<?php
include("connect.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin_users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        $_SESSION['userID'] = $user['adminID'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['firstName'] = $user['username'];
        $_SESSION['lastName'] = '';

        header("Location: admin.php");
        exit;
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login • Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <style>
    .admin-container {
      background-color: #af701d;
      border-radius: 40px;
      padding: 2rem;
      box-shadow:
        inset -5px -8px 3px rgba(16, 13, 106, 0.5),
        inset 5px 8px 3px rgba(232, 225, 216, 0.5);
    }
    .admin-title {
      background-color: #0b5488;
      color: #fee527;
      font-weight: bold;
      font-size: clamp(1.6rem, 3.5vw, 3.5rem);
      text-shadow: 1px 1px 1px black;
      border-radius: 40px;
      padding: 0.5rem 1.5rem;
      text-align: center;
      box-shadow:
        inset -5px -7px 3px rgba(32, 15, 0, 0.5),
        inset 5px 7px 3px rgba(232, 225, 216, 0.5);
    }
    .login-card {
      max-width: 430px;
    }
  </style>
</head>

<body>
  <div class="video-background">
    <video autoplay loop muted playsinline src="background/bgvideo.mp4"></video>
  </div>
  <div class="audio-background">
    <audio id="bgAudio" loop autoplay src="background/bgaudio.mp3"></audio>
  </div>

  <div class="d-flex justify-content-center align-items-center" style="min-height:100vh;">
    <form method="POST" class="admin-container login-card">
      <div class="admin-title mb-4">Admin Login</div>

      <?php if (!empty($error)) { ?>
        <div class="alert alert-danger text-center"><?= $error ?></div>
      <?php } ?>

      <div class="mb-3">
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
      </div>
      <div class="mb-4">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>
      <div class="card-play mx-auto" style="width:180px;height:100px;">
        <button type="submit" class="btn btn-play" title="Login">
          <i class="fas fa-arrow-right"></i>
        </button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
