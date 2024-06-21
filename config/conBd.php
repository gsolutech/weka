<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $bdd = new PDO("mysql:host=$servername;dbname=light", $username, $password);
    }
    catch (PDOException $e) {
        echo "
            alert('Une errreur s'est produite lors de la connexion.')"; 
    }

?>