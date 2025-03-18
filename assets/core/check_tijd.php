<?php
// Database verbinding maken
include_once "connect.php";

// Ontvang de gegevens van het AJAX-verzoek
$lokaal = $_POST['lokaal'];
$datum = $_POST['datum'];
$start_tijd = $_POST['start_tijd'];
$eind_tijd = $_POST['eind_tijd'];

// Bepaal welke lokalen gecontroleerd moeten worden
$lokalen_te_controleren = [$lokaal]; // Begin met het geselecteerde lokaal

// Als het lokaal W002 is, voeg W002a en W002b toe aan de te controleren lokalen
if ($lokaal === 'W002') {
    $lokalen_te_controleren = ['W002a', 'W002b'];
}
// Als het lokaal W003 is, voeg W003a en W003b toe aan de te controleren lokalen
else if ($lokaal === 'W003') {
    $lokalen_te_controleren = ['W003a', 'W003b'];
}
// Als het lokaal W002a of W002b is, controleer ook of W002 bezet is
else if ($lokaal === 'W002a' || $lokaal === 'W002b') {
    $lokalen_te_controleren[] = 'W002';
}
// Als het lokaal W003a of W003b is, controleer ook of W003 bezet is
else if ($lokaal === 'W003a' || $lokaal === 'W003b') {
    $lokalen_te_controleren[] = 'W003';
}

// Bouw de SQL-query met een IN-clause voor de lokalen
$placeholders = str_repeat('?,', count($lokalen_te_controleren) - 1) . '?';
$sql = "SELECT * FROM reserveringen
        WHERE lokaal IN ($placeholders)
        AND datum = ?
        AND (
            (start_tijd <= ? AND eind_tijd > ?) OR
            (start_tijd < ? AND eind_tijd >= ?) OR
            (start_tijd >= ? AND eind_tijd <= ?)
        )";

// Bereid de parameters voor
$params = array_merge($lokalen_te_controleren, [$datum, $eind_tijd, $start_tijd, $eind_tijd, $start_tijd, $start_tijd, $eind_tijd]);
$types = str_repeat('s', count($params)); // Alle parameters zijn strings

// Bereid de statement voor
$stmt = $conn->prepare($sql);
$stmt->bind_param($types, ...$params);
$stmt->execute();
$result = $stmt->get_result();

// Stuur het resultaat terug als JSON
if ($result->num_rows > 0) {
    // Er zijn overlappende reserveringen
    $overlaps = [];
    while ($row = $result->fetch_assoc()) {
        $overlaps[] = [
            'lokaal' => $row['lokaal'],
            'start_tijd' => $row['start_tijd'],
            'eind_tijd' => $row['eind_tijd']
        ];
    }
    echo json_encode(['available' => false, 'overlaps' => $overlaps]);
} else {
    // Geen overlappende reserveringen
    echo json_encode(['available' => true]);
}

$stmt->close();
$conn->close();


?>
