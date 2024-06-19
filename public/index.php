<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <script src="index.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js'></script>
    <title>weka</title>
</head>
<body>
    <section id="header" class="w-full text-white">
        <!-- beso -->
        <nav class="bg-black w-full h-20 flex flex-row text-white relative">
            <ul class="flex flex-row w-2/6">
                <img src="../src/assets/statics/Fichier 10@4xweka.png" alt="" class="w-20 h-auto object-contain ml-20">
            </ul>
            <ul class="flex-row w-2/6 items-center justify-center flex text-center relative">
                <li href="" class="pr-7 cursor-pointer">Accueil</li>
                <li href="" class="pr-7 cursor-pointer">Reservation</li>
                <li href="" class="pr-7 cursor-pointer">Avis</li>
                <li href="" class="pr-7 cursor-pointer">Contact</li>
            </ul>
            <ul class="flex-row w-2/6 absolute right-20 justify-end items-end flex">
                <button id="btn_inscrire" class="bg-cyan-custom border-solid border-cyan-500 pr-4 pl-4 pt-1 pb-1 rounded-lg mt-7">S'inscrire</button>
            </ul>
        </nav>
        <div class="w-full flex flex-col pt-16 justify-center items-center h-96 bg-center bg-no-repeat bg-cover" style="background-image: url('/src/assets/statics/bgheader.jpg');">
            <ul class="w-full h-20 justify-center items-center flex">
                <img src="../src/assets/statics/Fichier 10@4xweka.png" alt="" class="w-20 h-auto object-contain ml-20">
            </ul>
            <ul class="w-full h-20 justify-center items-center flex">
                <p class="text-4xl font-thin">Réservation simplifiée pour <label class="font-medium">Tous Vos Besoins</label></p>
            </ul>
            <ul class="bg-white w-96 h-14 mt-8 rounded-md pl-2 pr-2 justify-center items-center flex">
                <form action="" method="post" class="relative flex flex-row justify-center items-center">
                    <input type="search" name="inputSearch" class="p-1 pl-2 pr-2 text-black focus:outline-none w-64 rounded-md mr-3 bg-gray-200">
                    <input type="submit" value="Rechercher" name="valideSearch" class="bg-cyan-custom border-2 border-solid border-cyan-500 p-1 pr-2 pl-2 rounded-md ">
                </form>      
            </ul>
            <ul class="justify-end items-end flex mt-2">
                <input type="radio" name="filtre_Check" id="" value="dateFiltre" id="showCalendarRadio" class="w-5 h-5 bg-cyan-500 border-2 border-solid border-cyan-500">
                <label for="filtre_Check" class="mr-10 ml-2">Filtrez par date</label>
                <input type="radio" name="filtre_Check" id="" checked value="dispoFiltre" class="w-5 h-5 bg-cyan-500 border-2 border-solid border-cyan-500">
                <label for="filtre_Check" class="mr-10 ml-2">Disponible</label>
                <input type="date" name="calendar" id="calendar" class="hidden">
                <!-- djo -->
            </ul>
        </div>
        <div class="calendarDiv" class="absolute bg-red-500 w-96 h-96">
            <p class="">Choisissez une date </p>
        </div>
    </section>

    <section class="yves">
        <class="test">
            <!-- <p>fgkvgvvcgh</p> -->
        </div>
    </section>

    <section>
        <!-- greg -->
    </section>
</body>
</html>