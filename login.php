<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login</title>

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
      padding: 0.4rem 1.5rem;
      text-align: center;
      box-shadow:
        inset -5px -7px 3px rgba(32, 15, 0, 0.5),
        inset 5px 7px 3px rgba(232, 225, 216, 0.5);
    }

    .login-card { max-width: 430px; }
  </style>
</head>

<body>
  <div class="video-background">
    <video autoplay loop muted playsinline src="background/bgvideo.mp4"></video>
  </div>
  <div class="audio-background">
    <audio id="bgAudio" loop src="background/bgaudio.mp3" autoplay></audio>
  </div>

  <div class="d-flex justify-content-center align-items-center" style="min-height:100vh;">
    <form id="loginForm" class="admin-container login-card" autocomplete="off">
      <div class="admin-title mb-4">Admin&nbsp;Login</div>

      <div id="msg" class="alert alert-danger py-2 d-none"></div>

      <div class="mb-3">
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
      </div>

      <div class="mb-4">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>

      <div class="card-play mx-auto" style="width:180px;height:100px;">
        <button type="submit" class="btn btn-play" title="Sign in">
          <i class="fas fa-arrow-right"></i>
        </button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    document.getElementById('loginForm').addEventListener('submit', function (e) {
      e.preventDefault();

      const user = this.username.value.trim();
      const pass = this.password.value.trim();
      const msg  = document.getElementById('msg');

      if (user == 'admin' && pass == '12345678') {
        window.location.href = 'admin.php';
      } else {
        msg.textContent = 'Invalid username or password';
        msg.classList.remove('d-none');
      }
    });
  </script>
</body>
</html>
