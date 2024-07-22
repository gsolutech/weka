<?php
// require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'head.php';
require_once dirname(dirname(__DIR__))  . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'conBd.php';

// $message = "";
// $messageType = "";
// $name_service_get ="";
// $prix_get = "";

// if (isset($_POST['getData_reservation'])) {
//     $name_service_get = $_POST['name_service'] ? htmlspecialchars($_POST['name_service']) : '';
//     $prix_get = $_POST['price_service'] ? htmlspecialchars($_POST['price_service']) : '';
// }
?>

    <div class="form-container hidden" id="showReservationDiv">
        <h2 class="form-title">Réservez Maintenant</h2>
        <?php if ($message): ?>
            <div class="<?php echo $messageType === 'success' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'; ?> p-4 mb-4 rounded">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>
        <form action="" method="POST">
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
                <input type="text" id="prix" name="prix" required readonly class="form-input cursor-not-allowed">
                <input type="text" id="serviceNameHide" name="serviceNameHide" class="hidden required readonly cursor-not-allowed">

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
            <button type="submit" name="send_reservation" class="form-button" id="reservation_check_data">Envoyer</button>
        </form>
    </div>



    <?php
//     if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send_reservation'])) {

//     $nom = $_POST['nom'];
//     $phone = $_POST['phone'];
//     $serviceName = $_POST['serviceNameHide'];
//     $datePrevu = $_POST['datePrevu'];
//     $delai = $_POST['delais'];
//     $prix = $_POST['prix'];
//     // $prix = $prix_get;
//     $serviceAutres = $_POST['service'];

//     $etatReservation = "En attente";
//     $id_client = "";
//     try {
        
//         $bdd->beginTransaction();
//         // echo "Connexion ouvert : " . $nom + $phone;
//         //ajouter le client
//         $stmt = $bdd->prepare("INSERT INTO tclient (nom, phone) VALUES (?, ?)");
//         $stmt->execute([$nom, $phone]);

//         //récupérer l'id du client 
//         $req = $bdd->prepare("SELECT * FROM tclient ORDER BY idClient DESC LIMIT 1");
//         $req->execute();
//         $total = $req->rowCount();
//         $resultat = $req->fetchAll(PDO::FETCH_ASSOC);

//         if ($total) {
//             foreach($resultat as $res) {
//                 $id_client = $res['idClient'];
//                 echo "Id = " . $id_client;
//             }

//         } else {
//             $message = "Une erreur s'est produite";
//         }
//         //ajouter sa reservation
//         $stmt = $bdd->prepare("INSERT INTO treservation (datePrevu, delais, prix, serviceAutres, etatReservation, idClient, servicesName) VALUES (?, ?, ?, ?, ?, ?, ?)");
//         $stmt->execute([$datePrevu, $delai, $prix, $serviceAutres, $etatReservation, $id_client, $serviceName]);



//         $bdd->commit();

//         $message = "Réservation et client enregistrés avec succès !";
//         $messageType = "success";

//         $url = "user-reservation-140083638904";
//         header("Location: ../../../../public/index.php?name=" . urlencode($url));
//         exit();

//     } catch (Exception $e) {
    
//         $bdd->rollBack();
//         $message = "Erreur : " . $e->getMessage();
//         $messageType = "error";
//     }
//     // $stmt->close();
//     // $bdd->close();
// } else {
//     echo "Non chargée !!!! ";
// }

?>