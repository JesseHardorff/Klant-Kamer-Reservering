<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/lijst.css">


    <title>Klant-Kamer-Reservering</title>
    <link rel="icon" type="image/x-icon" href="BUREAU-LOGO.ico">

</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="header-logo">
            <img src="Layer 2.png" alt="HETBUREAU-LOGO-ZWART">
        </div>
        <div class="header-text-wrapper">
            <h1 class="header-text">Beheren</h1>
            <p>als docent naam</p>
        </div>
    </header>
    <div class="content">
        <!-- ADD A SEARCH AND SORT FUNCTION HERE -->
        <table>
            <tr class="table-header"><th></th><th></th><th>Datum</th><th>Start tijd</th><th>Eind tijd</th><th>Lokaal</th><th>Gepland door</th><th>Klant</th></tr>
            <?php
                // Decode the JSON data
                $obj = json_decode(file_get_contents("data.json"));

                // Loop through the klantgespreken array
                foreach($obj->klantgespreken as $key => $value) {
            ?>
            <tr class="table-item">
                <td class="item-edit">EDIT</td>
                <td class="item-delete">DELETE</td>
                <td><?= $value->datum ?></td>
                <td><?= $value->start ?></td>
                <td><?= $value->eind ?></td>
                <td><?= $value->Lokaal ?></td>
                <td><?= $value->door ?></td>
                <td><?= $value->klant ?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>