<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alphabets</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
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
          <div class="alphabet-title py-3 text-center">Alphabets</div>
        </div>
      </div>

      <div class="button-container" id="alphabet-buttons"></div>

      <div class="row justify-content-center my-4">
        <div class="col-auto">
          <div class="card-back">
            <div class="back-button">
              <a href="alphanum.php">
                <i class="fa-solid fa-arrow-left"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    const letters = [
      "Aa", "Bb", "Cc", "Dd", "Ee", "Ff", "Gg", "Hh", "Ii", "Jj",
      "Kk", "Ll", "Mm", "Nn", "Oo", "Pp", "Qq", "Rr", "Ss", "Tt",
      "Uu", "Vv", "Ww", "Xx", "Yy", "Zz"
    ];

    const links = letters.map(letter => "perletters.php?char=" + letter.charAt(0).toUpperCase());
    const buttonContainer = document.getElementById("alphabet-buttons");
    let htmlContent = "";

    for (let i = 0; i < letters.length; i++) {
      htmlContent += `
        <a href="${links[i]}" target="_self">
          <button class="alphabet-button rounded-5">${letters[i]}</button>
        </a>
      `;
    }

    buttonContainer.innerHTML = htmlContent;
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
