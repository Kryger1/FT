<?php
require "settings/init.php";


$abonnems = $db->sql("SELECT * FROM abonnem");
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Abonnement</title>

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
    <h1 class="">Tilmeld dig </h1>
</div>
<br>
<div class="info container-fluid">
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="abonnement.php" method="post">
                <div class="mb-4">
                    <label for="webName" class="form-label">Mellems grupper <span class="required-field">*</span></label>
                    <select class="form-select" id="webName">
                        <option value="" disabled selected hidden></option>
                        <?php
                        foreach ($abonnems as $abonnem) {
                            echo '<option value="'.$abonnem->abonnemPris.'">'.$abonnem->abonnemName.'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="navn" class="form-label">Navn <span class="required-field">*</span></label>
                    <input type="text" class="form-control" id="navn" placeholder="Indtast dit navn">
                </div>
                <div class="mb-4">
                    <input type="radio" id="privatperson" name="abonnementstype" value="privatperson" checked>
                    <label for="privatperson">Privatperson</label>
                    <input type="radio" id="firma" name="abonnementstype" value="firma">
                    <label for="firma">Firma/organisation</label>
                </div>
                <div class="mb-4">
                    <label for="adresse" class="form-label">Adresse <span class="required-field">*</span></label>
                    <textarea class="form-control" id="adresse" placeholder="Gadeadresse, postnummer, by"></textarea>
                </div>
                <div class="mb-4">
                    <label for="telefonnummer" class="form-label">Telefonnummer <span class="required-field">*</span></label>
                    <input type="text" class="form-control" id="telefonnummer" placeholder="Indtast dit telefonnummer">
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label">E-mail <span class="required-field">*</span></label>
                    <input type="email" class="form-control" id="email" placeholder="Indtast din e-mail">
                </div>
                <div class="mb-4">
                    <label for="adgangskode" class="form-label">Adgangskode <span class="required-field">*</span></label>
                    <input type="password" class="form-control" id="adgangskode" placeholder="Indtast en adgangskode">
                </div>
                <div class="mb-4">
                    <label for="gentag-adgangskode" class="form-label">Gentag adgangskode <span class="required-field">*</span></label>
                    <input type="password" class="form-control" id="gentag-adgangskode" placeholder="Gentag adgangskoden">
                </div>
                <div class="mb-4">
                    <label for="betalingsmetode" class="form-label">Betalingsmetode <span class="required-field">*</span></label>
                    <select class="form-control" id="betalingsmetode">
                        <option value="kreditkort">Kreditkort</option>
                        <option value="paypal">PayPal</option>
                        <option value="bankoverførsel">Bankoverførsel</option>
                    </select>
                    <div class="mb-4">
                        <label for="pris" class="form-label">Abonnementspris</label>
                        <input type="text" class="form-control" id="pris" value="

                        <?php echo number_format($abonnems->abonnemPris) . ' DKK'; ?>" readonly>

                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="vilkår" required>
                        <label class="form-check-label" for="vilkår">Jeg accepterer <a href="#">vilkårene</a></label>
                    </div>
                    <br>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary">Tilmeld</button>
                    </div>
            </form>
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


