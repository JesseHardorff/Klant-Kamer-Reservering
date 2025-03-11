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
    <!-- Header -->
    <header class="reserve-header">
        <div class="HETBUREAU-LOGO">
            <img src="Layer 2.png" alt="HETBUREAU-LOGO-ZWART">
        </div>
        <div class="time-date-info">
            <div class="label" id="time-label">Tijd:</div>
            <div class="current" id="time-current">
                <?php
                date_default_timezone_set('Europe/Amsterdam');
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
                <img src="./assets/img/qr.png" alt="qr-code">
            </div>
        </div>
    </header>
    <!-- VANDAAG KALENDER -->
    <div class="reserve-vandaag">
        <div class="reserve-vandaag-tekst">
            VANDAAG:
        </div>
        <div class="reserveringen">
            <div class="parent">
                <div class="vandaag-div1">Datum </div>
                <div class="vandaag-div2"> </div>
                <div class="vandaag-div3"> </div>
                <div class="vandaag-div4"> </div>
                <div class="vandaag-div5"> </div>
                <div class="vandaag-div6"> </div>
                <div class="vandaag-div7">Start Tijd </div>
                <div class="vandaag-div8"> </div>
                <div class="vandaag-div9"> </div>
                <div class="vandaag-div10"> </div>
                <div class="vandaag-div11"> </div>
                <div class="vandaag-div12"> </div>
                <div class="vandaag-div13">Eind Tijd </div>
                <div class="vandaag-div14"> </div>
                <div class="vandaag-div15"> </div>
                <div class="vandaag-div16"> </div>
                <div class="vandaag-div17"> </div>
                <div class="vandaag-div18"> </div>
                <div class="vandaag-div19">Lokaal </div>
                <div class="vandaag-div20"> </div>
                <div class="vandaag-div21"> </div>
                <div class="vandaag-div22"> </div>
                <div class="vandaag-div23"> </div>
                <div class="vandaag-div24"> </div>
                <div class="vandaag-div25"> Gepland door</div>
                <div class="vandaag-div26"> </div>
                <div class="vandaag-div27"> </div>
                <div class="vandaag-div28"> </div>
                <div class="vandaag-div29"> </div>
                <div class="vandaag-div30"> </div>
                <div class="vandaag-div31">Met wie </div>
                <div class="vandaag-div32"> </div>
                <div class="vandaag-div33"> </div>
                <div class="vandaag-div34"> </div>
                <div class="vandaag-div35"> </div>
                <div class="vandaag-div36"> </div>
            </div>
        </div>
    </div>

    <!-- PLUS KALENDER -->
    <div class="reserve-plus">
        <div class="reserve-plus-tekst">
            RESERVERINGEN
        </div>
        <div class="reserveringen">
            <div class="parent">
                <div class="plus-div1">Datum </div>
                <div class="plus-div2"> </div>
                <div class="plus-div3"> </div>
                <div class="plus-div4"> </div>
                <div class="plus-div5"> </div>
                <div class="plus-div6"> </div>
                <div class="plus-div7">Start Tijd </div>
                <div class="plus-div8"> </div>
                <div class="plus-div9"> </div>
                <div class="plus-div10"> </div>
                <div class="plus-div11"> </div>
                <div class="plus-div12"> </div>
                <div class="plus-div13">Eind Tijd </div>
                <div class="plus-div14"> </div>
                <div class="plus-div15"> </div>
                <div class="plus-div16"> </div>
                <div class="plus-div17"> </div>
                <div class="plus-div18"> </div>
                <div class="plus-div19">Lokaal </div>
                <div class="plus-div20"> </div>
                <div class="plus-div21"> </div>
                <div class="plus-div22"> </div>
                <div class="plus-div23"> </div>
                <div class="plus-div24"> </div>
                <div class="plus-div25"> Gepland door</div>
                <div class="plus-div26"> </div>
                <div class="plus-div27"> </div>
                <div class="plus-div28"> </div>
                <div class="plus-div29"> </div>
                <div class="plus-div30"> </div>
                <div class="plus-div31">Met wie </div>
                <div class="plus-div32"> </div>
                <div class="plus-div33"> </div>
                <div class="plus-div34"> </div>
                <div class="plus-div35"> </div>
                <div class="plus-div36"> </div>
            </div>
        </div>
    </div>

</body>
<!-- <script src="assets/js/bla.js"></script> -->

</html>