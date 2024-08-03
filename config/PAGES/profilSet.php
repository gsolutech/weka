<?php
// session_start();

// if (!isset($_SESSION['user_id']) || !isset($_SESSION['nom'])) {
//     die("Les variables de session ne sont pas définies.");
// } else {
// $nom_services = $_SESSION["nom"];
// }

// if (!isset($_COOKIE['user_id']) || !isset($_COOKIE['username'])) {
//     die("Les variables de cookies ne sont pas définies.");
// } else {
    $nom_services = $_COOKIE['nom'];
// }

$error = "";
global $nom_client;
global $prix_items;
global $category_items;
global $description_items;
global $image_name;
global $photo_profil_name;
global $photo_couverture_name;
global $req_service;
global $error;


$typePhotoProfil = "profil";
$typePhotoCouverture = "couverture";

//========================================== rechercher la photo de profil =========================================================

//rechercher la photo de profil correcpondante au nom du service
$req_service = $bdd -> prepare ("SELECT * FROM tphoto WHERE nomSalle=? AND typePhoto=?");
$req_service->execute([$nom_services,$typePhotoProfil]); 

$total_profil = $req_service->rowCount();
$resultat_profil = $req_service->fetchAll(PDO::FETCH_ASSOC);

if ($total_profil == 0) {
    //
} else {
    foreach($resultat_profil as $res_profil) {
        $photo_profil_name = $res_profil['photo'];

        echo '<script src="index.js"></script>';
        echo '<script>showProfilSettings();</script>';
    }
}

//================================================================ rechercher la photo de couverture===========================================

//rechercher la photo de coverture correcpondante au nom du service
$req_couv = $bdd -> prepare ("SELECT * FROM tphoto WHERE nomSalle=? AND typePhoto=?");
$req_couv->execute([$nom_services,$typePhotoCouverture]); 

$total_couv = $req_couv->rowCount();
$resultat_couv = $req_couv->fetchAll(PDO::FETCH_ASSOC);

if ($total_couv == 0) {
    //
} else {
    foreach($resultat_couv as $res_couv) {
        $photo_couverture_name = $res_couv['photo'];

        echo '<script src="index.js"></script>';
        echo '<script>showCouvertureSettings();</script>';
    }
}

//======================================== inserer la photo de profile ===============================================================

if ($_SERVER['REQUEST_METHOD'] == "POST") { 
    if (isset($_POST['send_profile_picture'])) {
        echo "send_profile_picture available";

        $req_service = $bdd -> prepare ("SELECT * FROM tphoto WHERE nomSalle=? AND typePhoto=?");
        $req_service->execute([$nom_services,$typePhotoProfil]); 
    
        $total_profil = $req_service->rowCount();
        $resultat_profil = $req_service->fetchAll(PDO::FETCH_ASSOC);
    
        if ($total_profil == 0) {
            uploadProfileImage($bdd, $nom_services, $typePhotoProfil);
        } else {
            deleteProfileIfExist($bdd, $nom_services, $typePhotoProfil);
        }


    } else {
        $error = "téléchargement non effectué !";
    }
}

function uploadProfileImage($bdd, $nom_services, $typePhotoProfil) {

    if (isset($_FILES['profile_picture']) && ($_FILES['profile_picture']['error']) == UPLOAD_ERR_OK ) { 

        $image_items = $_FILES['profile_picture']['name'];
        $image_items_tmp = $_FILES['profile_picture']['tmp_name'];

        if ($image_items != "") {
            $ext = pathinfo($image_items, PATHINFO_EXTENSION);
            $file_names = basename($image_items, '-' . $ext);

            if ($ext != "jpg" && $ext != "jpeg" && $ext != "png" && $ext != "gif") {
                $error = "Extension non permi * ('.jpeg, .png, .jpg, .gif')";
            } else {
                $image_name = $nom_services . '-' . rand() . '.' . $ext;
                move_uploaded_file($image_items_tmp, '../src/assets/salles/profil/' . $image_name);


                //insertion dans la base de données 
                $sql = $bdd->prepare("INSERT INTO tphoto (nomSalle, photo, typePhoto) VALUES (:nomSalle, :photo, :typePhoto)");
                $sql->bindParam(':nomSalle', $nom_services);
                $sql->bindParam(':photo', $image_name);
                $sql->bindParam(':typePhoto', $typePhotoProfil);

                // $sql2 = $bdd->prepare("INSERT INTO tinfosalle ()");
                if ($sql->execute()) {
                    header("Location: " . $_SERVER['REQUEST_URI']);
                    exit();
                } else {
                    $error = 'Le changement de la photo de profil a échoué';
                }
            }
        } else {
            $error = "Veillez charger une image !!";
        }
    } else {
        $error = "Une erreur s'est produite, réesayer plus tard";
    }
}
function deleteProfileIfExist($bdd, $nom_services, $typePhotoProfil) {
    
    $req_service = $bdd -> prepare ("SELECT * FROM tphoto WHERE nomSalle=? AND typePhoto=?");
    $req_service->execute([$nom_services,$typePhotoProfil]); 

    $total_profil = $req_service->rowCount();
    $resultat_profil = $req_service->fetchAll(PDO::FETCH_ASSOC);

    if ($total_profil == 0) {
        // echo "Aucun à supprimer élement trouvé (profil)";
    } else {
        $id_delete = "";
        foreach($resultat_profil as $res_profil) {

            $id_delete = $res_profil['idPhoto'];
            $file_name = $res_profil['photo'];


            $req_service_delete = $bdd -> prepare ("DELETE FROM tphoto WHERE idPhoto=?");
            $req_service_delete->execute([$id_delete]);

            if ($req_service_delete->rowCount() > 0) {
                $file_path = '../src/assets/salles/profil/' . $file_name;

                if ((file_exists($file_path))) {
                    if (unlink($file_path)) {
                        uploadProfileImage($bdd, $nom_services, $typePhotoProfil);
                        
                    } else {
                        $error = "Erreur lors de la suppression du fichier." . $file_path .'</br>';
                    }
                }else {
                    $error = "Le fichier n'existe pas." . $file_path .'</br>';
                }
            } else {
                $supp = "No record found to delete.";
            }
        }
    }
}
?>


<?php

//=======================================================  photo de couverture =================================================


if ($_SERVER['REQUEST_METHOD'] == "POST") { 
    if (isset($_POST['send_couverture_picture'])) {

        $req_service = $bdd -> prepare ("SELECT * FROM tphoto WHERE nomSalle=? AND typePhoto=?");
        $req_service->execute([$nom_services,$typePhotoCouverture]); 
    
        $total_profil = $req_service->rowCount();
        $resultat_profil = $req_service->fetchAll(PDO::FETCH_ASSOC);
    
        if ($total_profil == 0) {
            uploadCouvertureImage($bdd, $nom_services, $typePhotoCouverture);
        } else {
            deleteCouvertureIfExist($bdd, $nom_services, $typePhotoCouverture);
        }


    } else {
        $error = "Téléchargement non effectué ! </br>";
    }
}

function uploadCouvertureImage($bdd, $nom_services, $typePhotoCouverture) {

    if (isset($_FILES['couverture_picture']) && ($_FILES['couverture_picture']['error']) == UPLOAD_ERR_OK ) { 

        $image_items = $_FILES['couverture_picture']['name'];
        $image_items_tmp = $_FILES['couverture_picture']['tmp_name'];

        if ($image_items != "") {
            $ext = pathinfo($image_items, PATHINFO_EXTENSION);
            $file_names = basename($image_items, '-' . $ext);

            if ($ext != "jpg" && $ext != "jpeg" && $ext != "png" && $ext != "gif") {
                $error = "Extension non permi * ('.jpeg, .png, .jpg, .gif')";
            } else {
                $image_name = $nom_services . '-' . rand() . '.' . $ext;
                move_uploaded_file($image_items_tmp, '../src/assets/salles/couverture/' . $image_name);


                //insertion dans la base de données 
                $sql = $bdd->prepare("INSERT INTO tphoto (nomSalle, photo, typePhoto) VALUES (:nomSalle, :photo, :typePhoto)");
                $sql->bindParam(':nomSalle', $nom_services);
                $sql->bindParam(':photo', $image_name);
                $sql->bindParam(':typePhoto', $typePhotoCouverture);

                if ($sql->execute()) {
                    header("Location: " . $_SERVER['REQUEST_URI']);
                    exit();
                } else {
                    $error = 'Le changement de la photo de couverture a échoué';
                }
            }
        } else {
            $error = "Image vide (send_couverture_picture)";
        }
    } else {
        $error = "Une photo de couverture est requis !! ";
    }
}
function deleteCouvertureIfExist($bdd, $nom_services, $typePhotoCouverture) {
    
    $req_service = $bdd -> prepare ("SELECT * FROM tphoto WHERE nomSalle=? AND typePhoto=?");
    $req_service->execute([$nom_services,$typePhotoCouverture]); 

    $total_profil = $req_service->rowCount();
    $resultat_profil = $req_service->fetchAll(PDO::FETCH_ASSOC);

    if ($total_profil == 0) {
        // echo "Aucun à supprimer élement trouvé (profil)";
    } else {
        $id_delete = "";
        foreach($resultat_profil as $res_profil) {

            $id_delete = $res_profil['idPhoto'];
            $file_name = $res_profil['photo'];


            $req_service_delete = $bdd -> prepare ("DELETE FROM tphoto WHERE idPhoto=?");
            $req_service_delete->execute([$id_delete]);

            if ($req_service_delete->rowCount() > 0) {
                $file_path = '../src/assets/salles/couverture/' . $file_name;

                if ((file_exists($file_path))) {
                    if (unlink($file_path)) {
                        uploadCouvertureImage($bdd, $nom_services, $typePhotoCouverture);
                        
                    } else {
                        $error = "Erreur lors de la suppression du fichier." . $file_path .'</br>';
                    }
                }else {
                    $error = "Le fichier n'existe pas." . $file_path .'</br>';
                }
            } else {
                $supp = "No record found to delete.";
            }
        }
    }
}
?>