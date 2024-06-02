<?php
require "settings/init.php";
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Mellems fordel</title>

    <!-- Favicons -->
    <link href="img/234.png" rel="icon">


    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@700&display=swap" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<header class="app-header">
    <div class="text-center">
        <a href="index.php">
            <img class="logo" src="img/log.png" alt="Logo">
        </a>
    </div>
</header>
<br>
<div class="text-center">
    <h1 class="">Mellems fordel</h1>
</div>
<br>
<div class="card">
    <img src="img/slo.jpeg" class="card-img-top" alt="alarm 112"/>
    <div class="card-body">
        <h5 class="card-title">Bustur til Historiske Slot</h5>
        <p class="card-text">Tag med på en eksklusiv bustur til nogle af regionens mest imponerende historiske slotte. Nyd guidede ture gennem de storslåede sale og lær om slottenes rige historier og tidligere beboere..</p>
        <a href="" class="btn btn-primary">Tilmeld</a>
    </div>
</div>
<br>
<br>
<div class="card">
    <img src="img/nyh.jpg" class="card-img-top" alt="alarm 112"/>
    <div class="card-body">
        <h5 class="card-title">Kulturel Weekend i Hovedstaden</h5>
        <p class="card-text">Oplev en kulturelt fyldt weekend i landets hovedstad. Denne pakke inkluderer transport, overnatning og forudbestilte billetter til museer og teaterforestillinger. Nyd byens pulserende kulturliv og gourmetrestauranter.</p>
        <a href="" class="btn btn-primary">Tilmeld</a>
    </div>
</div>
<br>
<br>
<div class="card">
    <img src="img/str.jpeg" class="card-img-top" alt="alarm 112"/>
    <div class="card-body">
        <h5 class="card-title">Naturoplevelser langs Kysten</h5>
        <p class="card-text">Oplev en dagstur langs regionens smukke kyst. Vores guide vil lede dig gennem naturskønne ruter og forklare områdets geologi og marine liv. Afslut dagen med en hyggelig picnic ved stranden.</p>
        <a href="" class="btn btn-primary">Tilmeld</a>
    </div>
</div>
<br>
<div class="container text-center">
    <div class="home">
        <a href="index.php">
            <img class="home-img" src="img/home.png" alt="home" style="width: 40px; height: auto;">
        </a>
    </div>
</div>
<br>
<br>
<footer class="footer">
    <div class="container">
        <div class="search-container mx-3">
            <label for="searchInput"></label>
            <input type="text" id="searchInput" placeholder="Søg nyheder..." onkeyup="searchNews()">
        </div>

        <div class="social-links">
            <a href="https://www.facebook.com/folketidendegruppen" target="_blank" class="social-link mx-3" data-tooltip="Facebook">
                <img src="img/fac.png" alt="Facebook Icon">
            </a>
            <a href="https://www.instagram.com/folketidende/" target="_blank" class="social-link mx-3" data-tooltip="Instagram">
                <img src="img/ins.png" alt="Instagram Icon">
            </a>
            <a href="https://x.com/folketidende" target="_blank" class="social-link mx-3" data-tooltip="X">
                <img src="img/xe.png" alt="X Icon">
            </a>
            <a href="https://www.linkedin.com/company/lolland-falsters-folketidende/" target="_blank" class="social-link mx-3" data-tooltip="LinkedIn">
                <img src="img/link.png" alt="LinkedIn Icon">
            </a>
        </div>
    </div>
</footer>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>

