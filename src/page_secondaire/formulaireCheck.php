<?php
session_start();
// require_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'conBd.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnconnexion'])) {
    $error = "";
    echo $error;
    if (!empty($_POST['email']) and !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = sha1($_POST['password']);

        $req = $bdd->prepare("SELECT * FROM tsalle WHERE email =?");
        $req->execute(array($email));
        $compt = $req->rowCount();

        $resultats = $req -> fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultats as $resultat) {
            $passwordbd = $resultat['password'];
        }
        if ($compt == 0) {
            $error = "Compte non trouvé ! ";
        } else {
            if (password_verify($password, $passwordbd)) {
                $_SESSION['user_id'] = $resultat['idSalle'];
                $_SESSION['username'] = $resultat['prenom'];
                //redirectional authentication
                header ("location : accueil.php");
                echo "Connexion réussie !! ";
                exit();
            } else {
                $error = 'Mot de passe incorrect<br/>';
            }
        }
    } else {
        $message = 'remplissez tous les champs';
    }
}
