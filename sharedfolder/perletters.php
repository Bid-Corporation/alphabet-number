<?php
$char = isset($_GET['char']) ? strtoupper($_GET['char']) : 'A';

$words = [
    'A' => 'Apple',
    'B' => 'Ball',
    'C' => 'Cat',
    'D' => 'Dog',
    'E' => 'Elephant',
    'F' => 'Fish',
    'G' => 'Giraffe',
    'H' => 'Hat',
    'I' => 'Ice Cream',
    'J' => 'Jug',
    'K' => 'Kite',
    'L' => 'Lion',
    'M' => 'Monkey',
    'N' => 'Nest',
    'O' => 'Orange',
    'P' => 'Pencil',
    'Q' => 'Queen',
    'R' => 'Rabbit',
    'S' => 'Sun',
    'T' => 'Tiger',
    'U' => 'Umbrella',
    'V' => 'Violin',
    'W' => 'Whale',
    'X' => 'Xylophone',
    'Y' => 'Yacht',
    'Z' => 'Zebra'
];

$word = $words[$char] ?? 'Unknown';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Letter <?php echo $char; ?></title>
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
                            <div class="card-right d-flex justify-content-center align-items-center me-4">
                                <h1 style="color: #fee527; font-size: 6rem; margin: 0;"><?php echo $char; ?></h1>
                            </div>
                            <div class="d-flex align-items-center">
                                <h1 style="color: #fee527; font-size: 3rem; margin: 0;">is for <?php echo $word; ?></h1>
                            </div>
                        </div>
                        <div class="card-buttons">
                            <div class="card-back">
                                <a href="alphabets.php" class="btn btn-back">
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
