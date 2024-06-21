<?php
require_once 'C:/wamp64/www/weka/config/conBd.php';
require_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'conBd.php';
// verifier si le formulaire est soumis.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // obtention des donnees du formulaire.
    $nom = $_POST['nom'];
    $telephone = $_POST['telephone'];
    $date_reservation = $_POST['date_reservation'];
    $delais = $_POST['delais'];
    $prix = $_POST['prix'];
    $service = $_POST['service'];

    // Preparation et la liaison.
    $stmt = $bdd->prepare("INSERT INTO reservations (nom, telephone, date_reservation, delais, prix, service) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssds", $nom, $telephone, $date_reservation, $delais, $prix, $service);

    // executer la declaration.
    if ($stmt->execute()) {
        echo "Reservation successfully submitted!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // fermeture de la declaration.
    $stmt->close();
}

// Fermeture de la session de connection.
$bdd = null;
?>
<body>
<form action="reservation.php" method="POST">
    <label for="nom">Nom et Postnom</label>
    <input type="text" id="nom" name="nom" required>
    
    <label for="telephone">Numero de telephone</label>
    <input type="text" id="telephone" name="telephone" required>
    
    <label for="date_reservation">Date de votre reservation</label>
    <input type="date" id="date_reservation" name="date_reservation" required>
    
    <label for="delais">Delais ( Pour combien de jours )</label>
    <input type="number" id="delais" name="delais" required>
    
    <label for="prix">Votre Prix</label>
    <input type="text" id="prix" name="prix" required>
    
    <label for="service">Service</label>
    <input type="radio" id="service_salle" name="service" value="Service Traiteur de la Salle" required>
    <label for="service_salle">Service Traiteur de la Salle</label>
    <input type="radio" id="service_externe" name="service" value="Service Traiteur Externe" required>
    <label for="service_externe">Service Traiteur Externe</label>
    
    <button type="submit">Envoyer</button>
</form>
</body>