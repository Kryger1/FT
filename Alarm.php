<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Alarm 112</title>

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
    <h1>Alarm 112</h1>
</div>
<div class="container mt-5 text-center">
    <h2 class="mb-4">Tilmeld dig vores SMS-tjeneste</h2>
    <p class="mb-4">Indtast dit telefonnummer for at modtage vigtige opdateringer og nyheder direkte på SMS.</p>
    <form action="https://mm.inmobile.dk/api/publicforms/subscribe/v1/76d3bbc7-1575-4425-b059-e2d96035e581?cId=be4d86cb-e18d-49dd-a80c-169f49c41868" method="post">
        <input type="hidden" name="redirectUrl" value="https://mivu.dk/folke/" />
        <div class="form-group">
            <label for="countryCode">Landekode:</label>
            <select class="form-control" id="countryCode" name="countrycode" required>
                <option value="45" data-flag="img/den">+45 Danmark</option>
                <option value="46" data-flag="img/swe.png">+46 Sverige</option>
                <option value="47" data-flag="img/nor.png">+47 Norge</option>
                <option value="299" data-flag="img/gree.png">+299 Grønland</option>
            </select>
        </div>
        <div class="form-group">
            <label for="phonenumber">Telefonnummer:</label>
            <input type="text" class="form-control phone-number mx-auto" id="phonenumber" name="phonenumber" required>
        </div>
        <div class="form-group">
            <label for="name">Navn:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Navn">
        </div>
        <div class="form-group">
            <label for="zipCode">Postnr.:</label>
            <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="Postnr.">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="termsCheck" required>
            <label class="form-check-label" for="termsCheck">
                Jeg accepterer <a href="terms.html" target="_blank">vilkårene og betingelserne</a>
            </label>
        </div>
        <button type="button" class="btn btn-primary" onclick="window.location.href='Alarm.php';">Tilmeld</button>
    </form>
    <div id="responseMessage" class="mt-4" style="display:none;"></div>

<br>
<br>
<div class="card">
    <img src="img/bræ.jpeg" class="card-img-top" alt="alarm 112"/>
    <div class="card-body">
        <h5 class="card-title">Alarm 112: Markbrand med Kraftig Røgudvikling – Advarsel til Nærliggende Beboere</h5>
        <p class="card-text">En alvorlig markbrand er brudt ud og forårsager kraftig røgudvikling. Beboere i nærheden opfordres kraftigt til at holde vinduer og døre lukkede og undgå området, hvor branden hærger. Brandvæsenet er på stedet og arbejder på at kontrollere flammerne. Personer med åndedrætsproblemer skal være særligt opmærksomme og søge lægehjælp, hvis de oplever symptomer forværret af røgen. Undgå alle unødvendige udendørs aktiviteter i og omkring det berørte område indtil videre. Vær opmærksom på opdateringer fra lokale myndigheder.</p>
    </div>
</div>
<br>
<br>
<div class="card">
    <img src="img/uly.jpg" class="card-img-top" alt="alarm 112"/>
    <div class="card-body">
        <h5 class="card-title">Alarm 112: Trafikulykke på Bro – Lang Kødannelse, Find Alternative Ruter</h5>
        <p class="card-text">En alvorlig trafikulykke har fundet sted på broen, hvilket har medført betydelige forsinkelser og lang kødannelse. Bilister opfordres til at undgå broen og søge alternative ruter. Redningstjenester er på stedet, og oprydningsarbejdet er i gang, men trafikken forventes at være påvirket i flere timer. Følg skiltning og anvisninger fra trafikledelsen, og hold dig opdateret via trafikradioen og officielle trafikinformationstjenester. Vær særlig opmærksom, hvis du skal rejse i området, og planlæg ekstra tid til din rejse.</p>
    </div>
</div>
<br>
<br>
<div class="card">
    <img src="img/pol.JPG" class="card-img-top" alt="alarm 112"/>
    <div class="card-body">
        <h5 class="card-title">Alarm 112: Biljagt på Motorvejen – Stærkt Forøget Trafikrisiko</h5>
        <p class="card-text">
            En igangværende biljagt på motorvejen har forøget risikoen for trafikulykker betydeligt. Bilister opfordres til at udvise stor forsigtighed og overveje alternative ruter, hvor det er muligt. Politiet er aktivt involveret i jagten og arbejder på at sikre området og bringe situationen under kontrol. For din egen sikkerhed, undgå at nærme dig eller blande dig i politiets arbejde. Hold dig opdateret gennem lokale nyhedskanaler og trafikmeldinger, og følg eventuelle anvisninger fra trafikmyndighederne.</p>
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
