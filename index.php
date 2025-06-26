<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Finals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- VIDEO BACKGROUND -->
    <div class="video-background">
        <video autoplay loop muted playsinline src="background/bgvideo.mp4"></video>
    </div>

    <!-- AUDIO BACKGROUND -->
    <div class="audio-background">
        <audio id="bgAudio" loop src="background/bgaudio.mp3"></audio>
    </div>

    <div class="main-wrapper">
        <div class="container mb-4">
            <div class="d-flex justify-content-center">
                <div class="d-flex flex-column align-items-center gap-3">

                    <div class="logo-wrapper">
                        <img src="./background/logo.png" class="logo-image" alt="Alpha Kids Logo">
                    </div>

                    <div class="card-play p-2 d-flex align-items-center justify-content-center">
                        <a href="sharedfolder/alphanum.php" class="btn btn-play">
                            <i class="fas fa-play" style="margin-top: 1.3rem;"></i>
                        </a>
                    </div>

                    <div class="d-flex gap-3">
                        <div class="card-music p-2 d-flex align-items-center justify-content-center">
                            <button class="btn btn-music" onclick="toggleMusic(this)">
                                <i class="fas fa-volume-xmark"></i>
                            </button>
                        </div>
                        <div class="card-admin p-2 d-flex align-items-center justify-content-center">
                            <button class="btn btn-admin">
                                <i class="fas fa-user"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleMusic(button) {
            const audio = document.getElementById('bgAudio');
            const icon = button.querySelector('i');

            if (audio.paused) {
                audio.play().then(() => {
                    icon.classList.remove('fa-volume-xmark');
                    icon.classList.add('fa-volume-high');
                    button.style.backgroundColor = '#0E7B15';
                }).catch(err => {
                    console.error("Audio play failed:", err);
                });
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