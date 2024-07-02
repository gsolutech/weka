<?php
require_once 'C:/wamp64/www/weka/config/conBd.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nom = $_POST['nom'];
    $phone = $_POST['phone'];
    $datePrevu = $_POST['datePrevu'];
    $delai = $_POST['delais'];
    $prix = $_POST['prix'];
    $serviceAutres = $_POST['service'];

    $stmt = $bdd->prepare("INSERT INTO treservations (date_reservation, delai, prix, serviceAutres) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $datePrevu, $delai, $prix, $serviceAutres);
    if ($stmt->execute()) {
        echo "Réservation enregistrée avec succès !";
    } else {
        echo "Erreur : " . $stmt->error;
    }

    $stmt->close();

    $stmt = $bdd->prepare("INSERT INTO tclients (nom, phone) VALUES (?, ?)");
    $stmt->bind_param("ss", $nom, $phone);
    if ($stmt->execute()) {
        echo "Client enregistré avec succès !";
    } else {
        echo "Erreur : " . $stmt->error;
    }
    $stmt->close();
}
$bdd->close();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche de Réservation</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .form-container {
            background-color: #D1D5DB; 
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            max-width: 28rem;
            margin: auto;
        }
        .form-title {
            font-size: 1.5rem;
            font-weight: 700; 
            margin-bottom: 1.5rem;
            text-align: center;
        }
        .form-label {
            display: block; 
            color: #4B5563; 
        }
        .form-input {
            width: 100%; 
            padding: 0.5rem; 
            border: 1px solid #9CA3AF; 
            border-radius: 0.25rem; 
            margin-top: 0.25rem;
        }
        .form-button {
            background-color: #4299E1; 
            color: #FFF; 
            padding: 0.5rem 1rem; 
            border-radius: 0.25rem; 
            text-align: center;
            display: block;
            margin: 1.5rem auto 0; 
        }
        .form-button:hover {
            background-color: #2B6CB0; 
        }
    </style>
</head>
<body class="bg-gray-200 flex items-center justify-center min-h-screen">
    <div class="form-container">
        <h2 class="form-title">Réservez Maintenant</h2>
        <form action="reservation.php" method="POST">
            <div class="mb-4">
                <label for="nom" class="form-label">Nom et Postnom</label>
                <input type="text" id="nom" name="nom" required class="form-input">
            </div>
            <div class="mb-4">
                <label for="phone" class="form-label">Numéro de téléphone</label>
                <input type="text" id="phone" name="phone" required class="form-input">
            </div>
            <div class="mb-4">
                <label for="datePrevu" class="form-label">Date de votre réservation</label>
                <input type="date" id="datePrevu" name="datePrevu" required class="form-input">
            </div>
            <div class="mb-4">
                <label for="delais" class="form-label">Délais (Pour combien de jours)</label>
                <input type="number" id="delais" name="delais" required class="form-input">
            </div>
            <div class="mb-4">
                <label for="prix" class="form-label">Votre Prix</label>
                <input type="text" id="prix" name="prix" required class="form-input">
            </div>
            <div class="mb-4">
                <label class="form-label">Service</label>
                <div class="flex items-center mt-1">
                    <input type="radio" id="service_salle" name="service" value="Service Traiteur de la Salle" required class="mr-2">
                    <label for="service_salle" class="mr-4 text-gray-700">Service Traiteur de la Salle</label>
                    <input type="radio" id="service_externe" name="service" value="Service Traiteur Externe" required class="mr-2">
                    <label for="service_externe" class="text-gray-700">Service Traiteur Externe</label>
                </div>
            </div>
            <button type="submit" class="form-button">Envoyer</button>
        </form>
    </div>
</body>
</html>
