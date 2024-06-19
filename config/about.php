<?php
// status.php

// Fonction pour vérifier la disponibilité (remplacez par votre logique)
function isAvailable() {
    // Exemple de logique de disponibilité
    return rand(0, 1) == 1; // Random true ou false pour l'exemple
}

$status = isAvailable() ? "Disponible" : "Occupée";
$statusColor = isAvailable() ? "bg-green-500" : "bg-red-500";

$response = array(
    "status" => $status,
    "statusColor" => $statusColor
);

header('Content-Type: application/json');
echo json_encode($response);
?>

