<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Folketidende</title>

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
<!-- header -->
<header class="app-header">
    <img class="logo text-center" src="img/log.png" alt="App Logo">
</header>
<br>
<br>
<!-- Overskrift -->
<div class="text-center">
    <h1>Folketidende</h1>
</div>
<br>
<br>
<!-- kalgorier -->
<div class="container text-center">
    <div class="box">
        <a href="news.php">
            <img class="icon" src="img/new.png" alt="Icon 1">
        </a>
    </div>
    <div class="p-2">
        <h4 class="button-text">Nyheder</h4>
    </div>
    <br>
    <br>
    <div class="box">
        <a href="Alarm.php">
            <img class="icon" src="img/alarm.png" alt="Icon 2">
        </a>
    </div>
    <div class="p-2">
        <h4 class="button-text">Alarm 112</h4>
    </div>
    <br>
    <br>
    <div class="box">
        <a href="abonnement.php">
            <img class="icon" src="img/sub.png" alt="Icon 3">
        </a>
    </div>
    <div class="p-2">
        <h4 class="button-text">Abonnement</h4>
    </div>
    <br>
    <div class="box">
        <a href="fordel.php">
            <img class="icon" src="img/onl.png" alt="Icon 4">
        </a>
    </div>
    <div class="p-2">
        <h4 class="button-text">Fordel</h4>
    </div>
</div>

<br>
<br>
<br>
<br>
<!-- Footer -->
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