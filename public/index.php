<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="index.js" defer>
    <title>weka</title>
</head>
<body>
    <section id="header">
        <!-- beso -->
        <nav>
            <ul class="firstU">
                <img src="../src/assets/statics/Fichier 10@4xweka.png" alt="">
            </ul>
            <ul class="secondU">
                <li href="">Accueil</li>
                <li href="">Reservation</li>
                <li href="">Avis</li>
                <li href="">Contact</li>
            </ul>
            <ul class="lastU">
                <button>S'inscrire</button>
            </ul>
        </nav>
        <div class="container">
            <ul>
                <img src="../src/assets/statics/Fichier 10@4xweka.png" alt="">
            </ul>
            <ul>
                <p>Réservation simplifiée pour <label>Tous Vos Besoins</label></p>
            </ul>
            <ul class="secondUl">
                <input type="search" name="inputSearch" class="search">
                <input type="submit" value="Rechercher" name="valideSearch" class="btnSend">
            </ul>
            <ul class="lastUl">
                <input type="radio" name="filtre_Check" id="" value="dateFiltre" onclick="canlendarShow(); ">
                <label for="filtre_Check">Filtrez par date</label>
                <input type="radio" name="filtre_Check" id="" checked value="dispoFiltre">
                <label for="filtre_Check">Disponible</label>
                <input type="date" name="calendar" id="calendar">
                <!-- djo -->
            </ul>
        </div>
    </section>

    <section>
        <!-- yves -->
    </section>

    <section>
        <!-- greg -->
    </section>
</body>
</html>