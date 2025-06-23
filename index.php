<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Finals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        .video-background video {
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            object-fit: cover;
        }

        .main-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            height: 100vh;
        }

        .card-play {
            width: 380px;
            height: 150px;
            border-radius: 40px;
            background-color: #AF701D;
            box-shadow: inset -2px -5px 4px rgba(16, 13, 106, 0.6), inset 10px 5px 4px rgba(232, 225, 216 0.5), inset 5px 10px 8px rgba(0, 0, 0, 0.5);
        }

        .btn-play {
            width: 350px;
            height: 120px;
            border-radius: 40px;
            background-color: #0E7B15;
            box-shadow: inset -5px -8px 4px rgba(0, 0, 0, 0.5), inset 5px 8px 4px rgba(152, 233, 155, 0.5);
        }

        .card-music {
            width: 180px;
            height: 100px;
            border-radius: 40px;
            background-color: #AF701D;
            box-shadow: inset -2px -5px 4px rgba(16, 13, 106, 0.6), inset 10px 5px 4px rgba(232, 225, 216, .5);
        }

        .btn-music {
            width: 160px;
            height: 80px;
            border-radius: 40px;
            background-color: #0E7B15;
            box-shadow: inset -5px -8px 4px rgba(0, 0, 0, 0.5), inset 5px 8px 4px rgba(152, 233, 155, 0.5);
        }

        .card-admin {
            width: 180px;
            height: 100px;
            border-radius: 40px;
            background-color: #AF701D;
            box-shadow: inset -2px -5px 4px rgba(16, 13, 106, 0.6), inset 10px 5px 4px rgba(232, 225, 216, .5);
        }

        .btn-admin {
            width: 160px;
            height: 80px;
            border-radius: 40px;
            background-color: #0E7B15;
            box-shadow: inset -5px -8px 4px rgba(0, 0, 0, 0.5), inset 5px 8px 4px rgba(152, 233, 155, 0.5);
        }

        .btn-music:hover {
            transform: scale(1.1);
        }

        .btn-music i,
        .btn-admin {
            color: #FEE527;
            font-size: 32px;
        }

        .btn-play i {
            color: #FEE527;
            font-size: 60px;
        }

        .audio-background {
            visibility: hidden;
            height: 0;
            width: 0;
        }
    </style>
</head>

<body>
    <div class="video-background">
        <video autoplay loop muted playsinline src="background/bgvideo.mp4"></video>
    </div>

    <div class="audio-background">
        <audio id="bgAudio" loop src="background/bgaudio.mp3"></audio>
    </div>

    <div class="main-wrapper">
        <div class="container mb-4">
            <div class="d-flex justify-content-center">
                <!-- Vertical Stack: Play on top, Music below -->
                <div class="d-flex flex-column align-items-start gap-3">

                    <div class="card-play p-2 d-flex align-items-center justify-content-center">
                        <a href="sharedfolder/alphanum.php" class="btn btn-play">
                            <i class="fas fa-play"></i>
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