<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js'></script>
    <script src="index.js" defer></script>
    <title>weka</title>
</head>
<body>
    <?php  require_once dirname(dirname(__DIR__)) .DIRECTORY_SEPARATOR . 'WEKA' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'conBd.php';     ?>
    <section id="header" class="w-full text-white">

        <nav class="bg-black w-full h-20 flex flex-row text-white relative">
            <ul class="flex flex-row w-2/6">
                <img src="../src/assets/statics/Fichier 10@4xweka.png" alt="" class="w-20 h-auto object-contain ml-20">
            </ul>
            <ul class="flex-row w-2/6 items-center justify-center flex text-center relative">
                <li href="" class="pr-7 cursor-pointer text-ys">Accueil</li>
                <li href="" class="pr-7 cursor-pointer">Reservation</li>
                <li href="" class="pr-7 cursor-pointer">Avis</li>
                <li href="" class="pr-7 cursor-pointer">Contact</li>
            </ul>
            <ul class="flex-row w-2/6 absolute right-20 justify-end items-end flex">
                <button id="btn_inscrire" class="bg-cyan-custom border-solid border-cyan-500 pr-4 pl-4 pt-1 pb-1 rounded-lg mt-7" onclick="ShowIscription();">S'inscrire</button>
            </ul>
        </nav>
        <div class="bg-header w-full flex flex-col pt-16 justify-center items-center h-96 bg-center bg-no-repeat bg-cover">
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
                <input type="radio" name="filtre_Check_date" id="" value="dateFiltre" id="showCalendarRadio" data-bs-toggle="" class="w-5 h-5 bg-cyan-500 border-2 border-solid border-cyan-500">
                <label for="filtre_Check" class="mr-10 ml-2">Filtrez par date</label>
                <input type="radio" name="filtre_Check_date" id="" checked value="dispoFiltre" class="w-5 h-5 bg-cyan-500 border-2 border-solid border-cyan-500">
                <label for="filtre_Check" class="mr-10 ml-2">Disponible</label>
                <input type="date" name="calendar" id="calendar" class="hidden">
                <!-- djo -->
            </ul>
        </div>

        <div id="calendarDiv" class="absolute left-96 bg-red-500 w-96 h-72 top-36 hidden">
            <p class="text-white">Choisissez une date </p>
            <input type="text" name="calendar" id="calendar" class="" focus>
        </div>

        <!-- <div id="calendarDiv" class="absolute bg-red-500 w-96 h-96 top-14">
            <p class="text-white">Choisissez une date </p>
        </div> -->

        <!-- dfndjfjf -->
    </section>

    <!-- tout les popup -->
    <section class="absolute top-16 w-full mt-12 z-50 backdrop-blur id="closePop">
        <?php require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'page_secondaire' . DIRECTORY_SEPARATOR . 'inscription.php' ?>
    </section>

    <section class="py-12">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h2 class="text-4xl font-semibold mb-4">Achèvement</h2>
            <p class="mb-8 text-gray-600">Grâce à la confiance de nos utilisateurs, Weka a atteint des sommets en matière de réservations en ligne. Nous avons facilité des milliers de réservations avec un taux de satisfaction élevé et des retours positifs constants. Rejoignez-nous et faites partie de notre succès !</p>
            <div class="flex justify-center space-x-2 mb-12">
                <!-- Images des utilisateurs -->
                <div class="flex">
                    <div class="w-12 h-12 rounded-full overflow-hidden -ml-4 first:ml-0 relative z-10">
                        <img src="../src/assets/salles/profil/11.jpg" alt="Personne 1" class="w-full h-full object-cover">
                    </div>
                    <div class="w-12 h-12 rounded-full overflow-hidden -ml-4 relative z-9">
                        <img src="../src/assets/salles/profil/12.jpg" alt="Personne 2" class="w-full h-full object-cover">
                    </div>
                    <div class="w-12 h-12 rounded-full overflow-hidden -ml-4 relative z-8">
                        <img src="../src/assets/salles/profil/13.jpg" alt="Personne 3" class="w-full h-full object-cover">
                    </div>
                    <div class="w-12 h-12 rounded-full overflow-hidden -ml-4 relative z-7">
                        <img src="../src/assets/salles/profil/14.jpg" alt="Personne 4" class="w-full h-full object-cover">
                    </div>
                    <div class="w-12 h-12 rounded-full overflow-hidden -ml-4 relative z-6">
                        <img src="../src/assets/salles/profil/9.jpg" alt="Personne 5" class="w-full h-full object-cover">
                    </div>
                </div>

            </div>
        </div>
        <h2 class="text-4xl font-semibold mb-8 text-center">Les Réservations</h2>
        <div class="w-full h-auto flex-wrap">
            <?php
                require_once dirname(dirname(__DIR__)) .DIRECTORY_SEPARATOR . 'WEKA' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'about.php';   
            ?>
            
        </div>
    </div>
</section>


    <section>
        <!-- greg -->
    </section>
</body>
</html>