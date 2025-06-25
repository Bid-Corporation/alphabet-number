<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Finals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="../style.css">
    
</head>

<body>
    <div class="video-background">
        <video autoplay loop muted playsinline src="../background/bgvideo.mp4"></video>
    </div>

    <div class="audio-background">
        <audio id="bgAudio" loop src="../background/bgaudio.mp3"></audio>
    </div>

    <div class="admin-page">
        <div class="container text-center mb-4">
            <div class="row mb-5 justify-content-center">
                <div class="col-12 col-md-6 mx-auto">
                    <div class="number-button my-3" >
                        <button><a href="alphabets.php">Alphabets</a></button>
                    </div>
                </div>
                <div class="col-12 col-md-6 mx-auto">
                    <div class="number-button my-3">
                        <button><a href="numbers.php">Numbers</a></button>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 mx-auto">
                    <div class="back-button">
                        <button><a href="../index.php"><i class="fa-solid fa-arrow-left"></i></a></button>
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
                audio.play();
                icon.classList.remove('fa-volume-xmark');
                icon.classList.add('fa-volume-high');
                button.style.backgroundColor = '#2297EB';
            } else {
                audio.pause();
                icon.classList.remove('fa-volume-high');
                icon.classList.add('fa-volume-xmark');
                button.style.backgroundColor = '#D80303';
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>