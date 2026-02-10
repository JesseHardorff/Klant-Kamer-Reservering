<?php
// Controleer of het formulier is verzonden
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "assets/core/connect.php";

    // Gegevens ophalen en in variabelen stoppen
    $lokaal = htmlspecialchars($_POST['lokaal']);
    $datum = htmlspecialchars($_POST['datum']);
    $start_tijd = htmlspecialchars($_POST['start_tijd']);
    $eind_tijd = htmlspecialchars($_POST['eind_tijd']);
    $klant = htmlspecialchars($_POST['klant']);
    $type = htmlspecialchars($_POST['type']);
    $student_nummer = htmlspecialchars($_POST['student']); // Zorg ervoor dat het veilig is

    // Gegevens in database invoegen
    $sql = "INSERT INTO reserveringen (lokaal, datum, start_tijd, eind_tijd, klant, type, student_nummer)
    VALUES ('$lokaal', '$datum', '$start_tijd', '$eind_tijd', '$klant', '$type', '$student_nummer')";

    $success = true;
    $error_message = "";

    if ($conn->query($sql) !== TRUE) {
        $success = false;
        $error_message = $conn->error;
    }

    // Sla de gegevens op in de sessie om ze in verstuurd.php te kunnen gebruiken
    $_SESSION['reservering'] = [
        'lokaal' => $lokaal,
        'datum' => $datum,
        'start_tijd' => $start_tijd,
        'eind_tijd' => $eind_tijd,
        'klant' => $klant,
        'type' => $type,
        'student_nummer' => $student_nummer,
        'success' => $success,
        'error_message' => $error_message
    ];

    // Redirect naar verstuurd.php
    header("Location: verstuurd.php");
    exit();
}
?>

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
    <header class="logo-container">
        <img class="logo" src="Layer 2.png" alt="Het Bureau logo">
    </header>

    <main class="page-container">
        <section class="reserve-info" aria-labelledby="reserveren-title">
            <h2 id="reserveren-title">Reserveren</h2>
            <p>Reserveer een lokaal voor een groepsbespreking of klantgesprek.</p>
        </section>

        <section class="form-container">
            <form id="reservationForm" method="post" action="" novalidate>
                <div class="form-group">
                    <label for="student">Studentnummer</label>
                    <input id="student" class="input-field" type="text" name="student" placeholder="000000" pattern="[0-9]{6}" maxlength="6" required>
                    <div class="error-message" id="student-error"></div>
                </div>

                <div class="form-group">
                    <label for="lokaal">Lokaal</label>
                    <select id="lokaal" class="input-field lokaal-select" name="lokaal" required>
                        <option value="" disabled selected>Selecteer een lokaal</option>
                        <option value="W002a">W002a</option>
                        <option value="W002b">W002b</option>
                        <option value="W003a">W003a</option>
                        <option value="W003b">W003b</option>
                    </select>
                </div>

                <div class="form-row">
                    <div class="form-group small">
                        <label for="datum">Datum</label>
                        <input id="datum" class="input-field" type="date" name="datum" required>
                    </div>
                    <div class="form-group small">
                        <label for="start_tijd">Start tijd</label>
                        <input id="start_tijd" class="input-field" type="time" min="08:00" max="19:00" name="start_tijd" required>
                    </div>
                    <div class="form-group small">
                        <label for="eind_tijd">Eind tijd</label>
                        <input id="eind_tijd" class="input-field" type="time" min="08:00" max="19:00" name="eind_tijd" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="klant">Klant</label>
                    <input id="klant" class="input-field" type="text" name="klant" placeholder="Klant" required>
                </div>

                <div class="form-group">
                    <label for="type">Type</label>
                    <select id="type" class="input-field type-select" name="type" required>
                        <option value="" disabled selected>Selecteer een type</option>
                        <option value="Klant gesprek">Klant gesprek</option>
                        <option value="Team vergadering">Team vergadering</option>
                        <option value="Workshop">Workshop</option>
                    </select>
                </div>

                <button class="submit-button" type="submit">Verstuur</button>
            </form>
        </section>
    </main>

</body>
<script src="assets/js/validation.js"></script>
</html>