<?php require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'conBd.php'; ?>

<?php
// page de connexion login check


session_start();

$message = "";
if (isset($_POST['btnconnexion'])) {

    if (!empty($_POST['email']) and !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = $_POST['password'];

        $req = $bdd->prepare("SELECT * FROM tsalle WHERE email =?");
        $req->execute(array($email));
        $compt = $req->rowCount();

        $resultats = $req->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultats as $resultat) {
            $passwordbd = $resultat['password'];

            $_SESSION['user_id'] = $resultat['idSalle'];
            $_SESSION['nom'] = $resultat['nom'];
            $_SESSION['prenom'] = $resultat['prenom'];
            $_SESSION['username'] = $resultat['nom'] . '_'. $_SESSION['prenom'];
        }
        if ($compt == 0) {
            $message = "Compte non trouvé ! ";
        } else {
            if (($password == $passwordbd)) {

                //redirectional authentication
                echo "Connexion réussie !! ";
                $idurl = rand(1000000, 9999999);
                $url = "user-" . $_SESSION['user_id'] . $_SESSION['username'] . $idurl;
                header("location: ../../../../public/accueil.php?name=" . urlencode($url));
                exit();
            } else {
                $message = 'Mot de passe incorrect<br/>';
                echo " <script>testConnexion();</script> ";
            }
        }
    } else {
        $message = 'remplissez tous les champs';
    }
}
?>


<?php 
//page d'inscription service, sign up check

?>

<?php 
//formulaire de reservation 

$message = "";
$messageType = "";
$name_service_get ="";
$prix_get = "";

if (isset($_POST['getData_reservation'])) {
    $name_service_get = $_POST['name_service'] ? htmlspecialchars($_POST['name_service']) : '';
    $prix_get = $_POST['price_service'] ? htmlspecialchars($_POST['price_service']) : '';
}


if (isset($_POST['send_reservation'])) {

    $nom = $_POST['nom'];
    $phone = $_POST['phone'];
    $serviceName = $_POST['serviceNameHide'];
    $datePrevu = $_POST['datePrevu'];
    $delai = $_POST['delais'];
    $prix = $_POST['prix'];
    // $prix = $prix_get;
    $serviceAutres = $_POST['service'];

    $etatReservation = "En attente";
    $id_client = "";
    try {
        
        $bdd->beginTransaction();
        // echo "Connexion ouvert : " . $nom + $phone;
        //ajouter le client
        $stmt = $bdd->prepare("INSERT INTO tclient (nom, phone) VALUES (?, ?)");
        $stmt->execute([$nom, $phone]);

        //récupérer l'id du client 
        $req = $bdd->prepare("SELECT * FROM tclient ORDER BY idClient DESC LIMIT 1");
        $req->execute();
        $total = $req->rowCount();
        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);

        if ($total) {
            foreach($resultat as $res) {
                $id_client = $res['idClient'];
                echo "Id = " . $id_client;
            }

        } else {
            $message = "Une erreur s'est produite";
        }
        //ajouter sa reservation
        $stmt = $bdd->prepare("INSERT INTO treservation (datePrevu, delais, prix, serviceAutres, etatReservation, idClient, servicesName) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$datePrevu, $delai, $prix, $serviceAutres, $etatReservation, $id_client, $serviceName]);



        $bdd->commit();

        $message = "Réservation et client enregistrés avec succès !";
        $messageType = "success";

        $url = "user-reservation-140083638904";
        header("Location: ../../../../public/index.php?name=" . urlencode($url));
        exit();

    } catch (Exception $e) {
    
        $bdd->rollBack();
        $message = "Erreur : " . $e->getMessage();
        $messageType = "error";
    }
    // $stmt->close();
    // $bdd->close();
} else {
    echo "Non chargée !!!! ";
}

?>