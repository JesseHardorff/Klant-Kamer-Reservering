<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/reserve.css">


    <title>Reserveren</title>
    <link rel="icon" type="image/x-icon" href="BUREAU-LOGO.ico">

</head>
<body>
    <div class="header">
        <div class="header-logo">
            <img src="Layer 2.png" alt="HETBUREAU-LOGO-ZWART">
        </div>
        <div class="header-text-wrapper">
            <h1 class="header-text">Reserveren</h1>
            <p>als 230838</p>
        </div>
    </div>
    <div class="reserve-info">
        <h2>Reserveren</h2>
        <p>reserveer een lokaal <br> voor een groepsbespreking</p>
    </div>
    <div class="form">
        <select class="input-field lokaal-select" type="select" placeholder="Lokaal">
            <option class="lokaal-option">W002a</option>
            <option class="lokaal-option">W002b</option>
            <option class="lokaal-option">W003a</option>
            <option class="lokaal-option">W003b</option>
        </select>
        <input class="input-field" type="date" placeholder="Datum" min="2025-03-11"> <!-- change so you can not do before current date-->
        <input class="input-field" type="time" placeholder="Start tijd"> <!-- build in usecases (check drive) -->
        <input class="input-field" type="time" placeholder="Eind tijd">
        <input class="input-field" type="text" placeholder="Klant">
        <select class="input-field type-select" type="select" placeholder="Type">
            <option class="type-option">Klant gesprek</option>
            <option class="type-option">Team vergadering</option>
            <option class="type-option">Workshop</option>
        </select>
        <button class="submit-button" type="submit">VERSTUUR</button>
        <!-- <p><a>Anuleer</a></p> -->
    </div>
</body>