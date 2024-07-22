<?php require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'conBd.php'; ?>

<?php
// page de connexion login check


session_start();

$message = "";
if (isset($_POST['btnconnexion'])) {
    echo $message;
    if (!empty($_POST['email']) and !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = $_POST['password'];

        $req = $bdd->prepare("SELECT * FROM tsalle WHERE email =?");
        $req->execute(array($email));
        $compt = $req->rowCount();

        $resultats = $req->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultats as $resultat) {
            $passwordbd = $resultat['password'];
        }
        if ($compt == 0) {
            $message = "Compte non trouvé ! ";
        } else {
            if (($password == $passwordbd)) {
                $_SESSION['user_id'] = $resultat['idSalle'];
                $_SESSION['username'] = $resultat['prenom'];
                //redirectional authentication
                echo "Connexion réussie !! ";
                $idurl = rand(1000000, 9999999);
                $url = "user-" . $idurl;
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

    $sql = "INSERT INTO tsalle (nom, prenom, email, password, phone) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nom, $prenom, $email, $hashed_password, $phone);

    if ($stmt->execute()) {
        echo "Nouvel utilisateur enregistré avec succès";
        // echo "<srcipt>closeInscription();</srcipt>";
    } else {
        echo "Erreur : " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}

?>