<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <script src="index.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>weka</title>
</head>
<body>
    <section id="header" class="w-full text-white">
        <!-- beso -->
        <nav class="bg-black w-full h-20 flex flex-row text-white">
            <ul class="flex flex-row w-2/6">
                <img src="../src/assets/statics/Fichier 10@4xweka.png" alt="" class="w-20 h-auto object-contain ml-20">
            </ul>
            <ul class="items-center justify-center flex">
                <li href="" class="pr-7 cursor-pointer">Accueil</li>
                <li href="" class="pr-7 cursor-pointer">Reservation</li>
                <li href="" class="pr-7 cursor-pointer">Avis</li>
                <li href="" class="pr-7 cursor-pointer">Contact</li>
            </ul>
            <ul class="absolute right-20 justify-end items-end flex">
                <button id="btn_inscrire" class="mt-7 bg-cyan-500 border-2 border-solid border-cyan-500 pr-2 pl-2 rounded-lg">S'inscrire</button>
            </ul>
        </nav>
        <div class="container" style="background-image: url('/src/assets/statics/bgheader.jpg');">
            <ul>
                <img src="../src/assets/statics/Fichier 10@4xweka.png" alt="" class="w-20 h-auto object-contain ml-20">
            </ul>
            <ul>
                <p>Réservation simplifiée pour <label>Tous Vos Besoins</label></p>
            </ul>
            <ul class="items-center justify-center flex">
                <input type="search" name="inputSearch" class="search">
                <input type="submit" value="Rechercher" name="valideSearch" class="btnSend">
            </ul>
            <ul class="justify-end items-end flex">
                <input type="radio" name="filtre_Check" id="" value="dateFiltre" id="showCalendarRadio">
                <label for="filtre_Check">Filtrez par date</label>
                <input type="radio" name="filtre_Check" id="" checked value="dispoFiltre">
                <label for="filtre_Check">Disponible</label>
                <input type="date" name="calendar" id="calendar">
                <!-- djo -->
            </ul>
        </div>
    </section>

    <section class="yves">
        <class="test">
            <p>fgkvgvvcgh</p>
        </div>
    </section>

    <section>
        <!-- greg -->
    </section>
</body>
</html>