<?php
require_once 'C:/wamp64/www/weka/config/conBd.php';
require_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'conBd.php';
// verifier si le formulaire est soumis.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // obtention des donnees du formulaire.
    $nom = $_POST['nom'];
    $phone = $_POST['phone'];
    $datePrevu = $_POST['datePrevu'];
    $delai = $_POST['delai'];
    $prix = $_POST['prix'];
    $serviceAutres = $_POST['serviceAutres'];

    // Preparation et la liaison.
    $stmt = $bdd->prepare("INSERT INTO treservations (date_reservation, delai,prix, serviceAutres) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssssds", $datePrevu, $delai, $prix, $serviceAutres);

    $stmt = $bdd->prepare("INSERT INTO tclients(nom,email,phone) VALUES (?, ?, ?)");
    $stmt->bind_param("ssssds", $nom, $email,$phone,);

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
    <input type="text" id="phone" name="phone" required>
    
    <label for="date_reservation">Date de votre reservation</label>
    <input type="date" id="datePrevu" name="datePrevu" required>
    
    <label for="delais">Delais ( Pour combien de jours )</label>
    <input type="number" id="delai" name="delai" required>
    
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