<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/reserve.css">


    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="BUREAU-LOGO.ico">

</head>
<body>
    <div class="header">
        <div class="header-logo">
            <img src="Layer 2.png" alt="HETBUREAU-LOGO-ZWART">
        </div>
        <h1 class="header-text">Reserveren</h1>
    </div>
    <div class="reserve-info">
        <h2>Reserveren</h2>
        <p>reserveer een lokaal <br> voor een groepsbespreking</p>
    </div>
    <div class="form">
        <select class="input-field lokaal-select" type="select" placeholder="Lokaal">
            <option class="lokaal-option">W001</option>
            <option class="lokaal-option">W002</option>
        </select>
        <input class="input-field" type="date" placeholder="Datum">
        <input class="input-field" type="time" placeholder="Start tijd"> <!-- build in usecases (check drive) -->
        <input class="input-field" type="time" placeholder="Eind tijd">
        <input class="input-field" type="text" placeholder="Klant">
        <button class="submit-button">VERSTUUR</button>
        <!-- <p><a>Anuleer</a></p> -->
    </div>
</body>