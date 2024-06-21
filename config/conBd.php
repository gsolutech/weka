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
    function getDatabaseConnection() {
        global $servername, $username, $password, $dbname;
    
        // Créer une nouvelle connexion MySQLi
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Vérifier la connexion
        if ($conn->connect_error) {
            die("Échec de la connexion : " . $conn->connect_error);
        }
    
        return $conn;
    }

?>