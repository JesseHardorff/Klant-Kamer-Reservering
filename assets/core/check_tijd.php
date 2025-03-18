<?php
// Database verbinding maken
include_once "connect.php";

// Ontvang de gegevens van het AJAX-verzoek
$lokaal = $_POST['lokaal'];
$datum = $_POST['datum'];
$start_tijd = $_POST['start_tijd'];
$eind_tijd = $_POST['eind_tijd'];

// Controleer of er overlappende reserveringen zijn
$sql = "SELECT * FROM reserveringen 
        WHERE lokaal = ? 
        AND datum = ? 
        AND (
            (start_tijd <= ? AND eind_tijd > ?) OR
            (start_tijd < ? AND eind_tijd >= ?) OR
            (start_tijd >= ? AND eind_tijd <= ?)
        )";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssss", $lokaal, $datum, $eind_tijd, $start_tijd, $eind_tijd, $start_tijd, $start_tijd, $eind_tijd);
$stmt->execute();
$result = $stmt->get_result();

// Stuur het resultaat terug als JSON
if ($result->num_rows > 0) {
    // Er zijn overlappende reserveringen
    $overlaps = [];
    while ($row = $result->fetch_assoc()) {
        $overlaps[] = [
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
