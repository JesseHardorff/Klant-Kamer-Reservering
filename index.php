
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">


    <title>Klant-Kamer-Reservering</title>
    <link rel="icon" type="image/x-icon" href="BUREAU-LOGO.ico">
  
</head>
<body>
<header class="reserve-header">
    <div class="HETBUREAU-LOGO">
        <img src="Layer 2.png" alt="HETBUREAU-LOGO-ZWART">
    </div>
    <div class="time-date-info">
        <div class="label" id="time-label">Tijd:</div>
        <div class="current" id="time-current">
            <?php
            echo date("H:i");
            ?>
        </div>
        <div class="label" id="date-label">Datum:</div>
        <div class="current" id="date-current">
            <?php
            echo date("d-m-Y");
            ?>
        </div>
    </div>
    <div class="qr">
        <p>SCAN MIJ!</p>
        <div class="qr-box">
            <img src="qr-code.png" alt="qr-code">
        </div>
    </div>
</header>
<div class="reserve-vandaag">
    <div class="reserve-vandaag-tekst">
    </div>
    <div class="reserveringen">
    </div>
</div>


<div class="reserve-rest">
</div>

</body>
<!-- <script src="assets/js/bla.js"></script> -->
</html>