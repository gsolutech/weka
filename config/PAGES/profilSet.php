<?php
$nom_services = $_COOKIE['nom'];

$error = "";
global $nom_client;
global $prix_items;
global $category_items;
global $description_items;
global $image_name;
global $photo_profil_name;
global $photo_couverture_name;


$typePhotoProfil = "profil";
$typePhotoCouverture = "couverture";

//rechercher la photo de profil correcpondante au nom du service
$req_service = $bdd -> prepare ("SELECT * FROM tphoto WHERE nomSalle=? AND typePhoto=?");
$req_service->execute([$nom_services,$typePhotoProfil]); 

$total_profil = $req_service->rowCount();
$resultat_profil = $req_service->fetchAll(PDO::FETCH_ASSOC);

if ($total_profil == 0) {
    echo "Aucun élement trouvé (profil)";
} else {
    foreach($resultat_profil as $res_profil) {
        $photo_profil_name = $res_profil['photo'];

        echo "Photo de profi trouvée : " . $photo_profil_name;
    }
}

//rechercher la photo de coverture correcpondante au nom du service
$req_couv = $bdd -> prepare ("SELECT * FROM tphoto WHERE nomSalle=? AND typePhoto=?");
$req_couv->execute([$nom_services,$typePhotoCouverture]); 

$total_couv = $req_couv->rowCount();
$resultat_couv = $req_couv->fetchAll(PDO::FETCH_ASSOC);

if ($total_couv == 0) {
    echo "Aucun élement trouvé (couverture)";
} else {
    foreach($resultat_couv as $res_couv) {
        $photo_couverture_name = $res_couv['photo'];

        echo "Photo de couverture trouvée : " . $photo_profil_name;
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['profile_picture'])) {
    $image_items = $_FILES['profile_picture']['name'];
    $image_items_tmp = $_FILES['profile_picture']['tmp_name'];

    if ($image_items != "") {
        $ext = pathinfo($image_items, PATHINFO_EXTENSION);
        $file_names = basename($image_items, '-' . $ext);

        if ($ext != "jpg" && $ext != "jpeg" && $ext != "png" && $ext != "gif") {
            $error = "Extension non permi * ('.jpeg, .png, .jpg, .gif')";
        } else {
            $image_name = $nom_client . '-' . rand() . '.' . $ext;
            move_uploaded_file($image_items_tmp, '../../src/assets/salles/profil/' . $image_name);

            $dateto_to_day = date("Y-M-D H:i:s");


            //insertion dans la base de données 
            $sql = $bdd->prepare("INSERT INTO tproduit (nom, prix, description, image, date, nomCollection) VALUES (:nom, :prix, :description, :image, :date, :nomCollection)");
            $sql->bindParam(':image', $image_name);
            $sql->bindParam(':date', $dateto_to_day);
            $sql->bindParam(':nomCollection', $category_items);

            $sql->execute();
        }
    } else {
        $error = "Une photo est requis !! ";
    }
} else {
    $error = "téléchargement non effectué !";
}

?>


<?php

if (isset($_POST['profile_image'])) {
    if (empty($_POST['nom']) || empty($_POST['prix'])) {
        $error = "Tout les champs sont requis ! ";
    } else {
        $nom_items = $_POST['nom'];
        $prix_items = $_POST['prix'];
        $category_items = $_POST['category'];
        $description_items = $_POST['description'];
    }
}
?>