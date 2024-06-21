<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $bdname = "weka";

    // 
    try {
        $bdd = new PDO("mysql:host=$servername;dbname=$bdname", $username, $password);
    }
    catch (PDOException $e) {
        echo "
            alert('Une errreur s'est produite lors de la connexion.')"; 
    }

?>