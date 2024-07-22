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

if (isset($_POST['check_inscri'])) {
    
    $nom = $_POST['username'];
    $prenom = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $conn = getDatabaseConnection();

    $sql = $bdd -> prepare("INSERT INTO tsalle (nom, prenom, email, password, phone) VALUES (:nom, :prenom, :email, :hashed_password, :phone)");
    // $stmt = $conn->prepare($sql);
    $sql->bindParam(':nom', $nom);
    $sql->bindParam(':prenom', $prenom);
    $sql->bindParam(':email', $email);
    $sql->bindParam(':hashed_password', $hashed_password);
    $sql->bindParam(':phone', $phone);

    $sql->execute();

    // if ($sql->execute()) {
    //     echo "Nouvel utilisateur enregistré avec succès";
    // } else {
    //     echo "Erreur : " . $stmt->error;
    // }

    $stmt->close();
    $conn->close();
}

?>