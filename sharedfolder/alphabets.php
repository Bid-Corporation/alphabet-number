<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alphabets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
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
                <div class="col-12 col-sm-6 mx-auto">
                    <div class="alphabet-title py-3 text-center">
                        Alphabets
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="button-container rounded-5">
                    <div class="row my-3" id="alphabet-buttons">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center my-3">
                <div class="col-12 mx-auto">
                    <div class="back-button">
                        <button><a href="alphanum.php"><i class="fa-solid fa-arrow-left"></i></a></button>
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

        const letters = [
            "Aa", "Bb", "Cc", "Dd", "Ee", "Ff", "Gg", "Hh", "Ii", "Jj",
            "Kk", "Ll", "Mm", "Nn", "Oo", "Pp", "Qq", "Rr", "Ss", "Tt",
            "Uu", "Vv", "Ww", "Xx", "Yy", "Zz"
        ];

        const links = letters.map(letter => "perletters.php?char=" + letter.charAt(0).toUpperCase());



        var buttonContainer = document.getElementById("alphabet-buttons");
        
        var htmlContent = "";

        for (var i = 0; i < letters.length; i++) {
            htmlContent +=
                '<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 my-3 text-center">' +
                    '<a href="' + links[i] + '" target="_self">' +
                        '<button class="alphabet-button py-3 px-4 rounded-5">' + letters[i] + '</button>' +
                    '</a>' +
                '</div>';
        }

        buttonContainer.innerHTML = htmlContent;

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>