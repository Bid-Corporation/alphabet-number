<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Numbers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
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
            <!-- Title -->
            <div class="row my-3">
                <div class="col-12 col-sm-6 mx-auto">
                    <div class="alphabet-title py-3 text-center">
                        Numbers
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="row my-3 justify-content-center">
                <div class="col-12">
                    <div class="button-container rounded-5">
                        <div class="row justify-content-center my-3" id="number-buttons">
                            <!-- Number buttons will be inserted here -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Back button -->
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

    <script>
        const numbers = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9" , "10"];
        const links = numbers.map(num => "pernumbers.php?num=" + num);
        const buttonContainer = document.getElementById("number-buttons");

        let htmlContent = "";
        for (let i = 0; i < numbers.length; i++) {
            htmlContent += `
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 my-3 text-center">
                    <a href="${links[i]}" target="_self">
                        <button class="numbers-button py-3 px-4 rounded-5">${numbers[i]}</button>
                    </a>
                </div>`;
        }
        buttonContainer.innerHTML = htmlContent;
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>
