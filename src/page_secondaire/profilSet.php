<?php
$error = "";
global $nom_items;
global $prix_items;
global $category_items;
global $description_items;
global $image_name;

if (isset($_FILES['photo']) || ($_FILES['photo']['error']) == UPLOAD_ERR_OK) {
    $image_items = $_FILES['photo']['name'];
    $image_items_tmp = $_FILES['photo']['tmp_name'];

    if ($image_items != "") {
        $ext = pathinfo($image_items, PATHINFO_EXTENSION);
        $file_names = basename($image_items, '-' . $ext);

        if ($ext != "jpg" && $ext != "jpeg" && $ext != "png" && $ext != "gif") {
            $error = "Extension non permi * ('.jpeg, .png, .jpg, .gif')";
        } else {
            $image_name = $nom_items . '-' . rand() . '.' . $ext;
            move_uploaded_file($image_items_tmp, '../../src/images/articles/' . $image_name);

            $dateto_to_day = date("Y-M-D H:i:s");


            //insertion dans la base de données 
            $sql = $bdd->prepare("INSERT INTO tproduit (nom, prix, description, image, date, nomCollection) VALUES (:nom, :prix, :description, :image, :date, :nomCollection)");
            $sql->bindParam(':nom', $nom_items);
            $sql->bindParam(':prix', $prix_items);
            $sql->bindParam(':description', $description_items);
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