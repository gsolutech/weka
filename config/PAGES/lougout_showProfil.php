<?php
$error = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST'
    && isset($_POST['showProfilSet'])) {

} else {
    $error = "Erreur Serveur, veillez réessayer plus tard";
}  

//=======================================
//SRcipt de déconnexion

if ($_SERVER['REQUEST_METHOD'] == 'POST'
    && isset($_POST['btn_sign_out'])) {

        session_unset();
        session_destroy();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        header("Location: ../public/index.php");
        exit();
} else {
    $error = "Erreur Serveur, veillez réessayer plus tard";
}  