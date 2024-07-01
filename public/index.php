<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../src/assets/statics/wekaicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />
    <script src="https://polyfill.io/v3/polyfill.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js'></script>
    <script src="index.js" defer></script>
    <title>Weka</title>
</head>
<body class="">
    <?php  
        require_once dirname(dirname(__DIR__)) .DIRECTORY_SEPARATOR . 'WEKA' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'conBd.php';
    ?>
    <section id="header" class="w-full text-white screen-minus-20 mb-24">

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
                <button id="btn_inscrire" class="bge-cyan-custom border-solid border-cyan-500 pr-4 pl-4 pt-1 pb-1 rounded-lg mt-7" onclick="ShowIscription();">S'inscrire</button>
            </ul>
        </nav>
        <div class="bg-header w-full flex flex-col pt-16 justify-center items-center h-full bg-center bg-no-repeat bg-cover">

            <ul class="w-full h-20 justify-center items-center flex">
                <img src="../src/assets/statics/Fichier 10@4xweka.png" alt="" class="w-20 h-auto object-contain ml-20">
            </ul>

            <ul class="w-full h-20 justify-center items-center flex">
                <p class="text-4xl font-thin">Réservation simplifiée pour <label class="font-medium">Tous Vos Besoins</label></p>
            </ul>

            <ul class="bg-white w-96 h-14 mt-8 rounded-md pl-2 pr-2 justify-center items-center flex">
                <form action="" method="get" class="relative flex flex-row justify-center items-center">
                    <input type="search" id="inputSearchId" name="inputSearch" class="p-1 pl-2 pr-2 text-black focus:outline-none w-64 rounded-md mr-3 bg-gray-200">
                    <button type="submit" id="btn_search_send" name="valideSearch" class="bge-cyan-custom border-2 border-solid border-cyan-500 p-1 pr-2 pl-2 rounded-md" onclick="showFiltre_recherche(); ">Rechercher</button>
                </form>      
            </ul>

            <ul class="justify-start items-start border-2 border-solid border-gray-100 mt-2 px-3 py-1 bg-gray-100 text-black rounded-full w-32 relative hidden" id="filtre_recherche">
                <button type="button" class="hover:bg-cyan-300 text-sm" onclick="closeFiltre_rechercher(); ">x Recherche par nom</button>
            </ul>

            <ul class="justify-end items-end flex mt-2">
                <input type="radio" name="filtre_Check_date"  value="dateFiltre" id="showCalendarRadio" data-bs-toggle="" class="w-5 h-5 bg-cyan-500 border-2 border-solid border-cyan-500">
                <label for="filtre_Check" class="mr-10 ml-2">Filtrez par date</label>
                <input type="radio" name="filtre_Check_date" id="dispoCheck" checked value="dispoFiltre" class="w-5 h-5 bg-cyan-500 border-2 border-solid border-cyan-500">
                <label for="filtre_Check" class="mr-10 ml-2">Disponible</label>
            </ul>
        </div>

        <div id="calendarDiv" class="w-full h-screen hidden z-50 backdrop-blur fixed inset-4 mt-10 justify-center items-center">
            <div class=" bg-white w-96 h-52 justify-center items-center flex relative flex-col rounded-md">
                <p class="text-black pb-3">Choisissez une date </p>
                <form class="mb-3" method="GET">
                    <input type="date" name="calendar" id="calendar" class="text-2xl border-2 border-solid border-bge-cyan-custom text-black">
                </form>
                <p id="errorDate" class="text-red-500 mb-10"></p>
                <ul class="w-full border-2 border-solid border-gray-200 absolute bottom-0 bg-slate">
                    <button class="bge-cyan-custom text-white w-3/6 h-11 border-2 border-solid border-cyan-500 float-right" onclick="getDateCalendar(); ">Filtrer</button>
                    <button class="bge-cyan-custom text-white w-3/6 h-11 border-2 border-solid border-cyan-500 float-right" onclick="closeCalendar(); ">Fermer</button>
                </ul>
            </div>
        </div>
    </section>

    <!-- tout les popup -->
    <section class="w-full h-screen hidden z-50 backdrop-blur fixed inset-4 justify-center items-center"  id="closePop">
        <?php require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'page_secondaire' . DIRECTORY_SEPARATOR . 'formulaire.php' ?> 
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
        <div id="mainContainer" class="w-full flex flex-wrap justify-center items-center">
            <?php
                require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'WEKA' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'about.php';   
            ?>           
        </div>
        <!-- <div id="filtreContainer" class="w-full h-auto flex-wrap hidden">
        </div> -->
    </div>
</section>


    <section>
        <!-- greg -->
         <div class="logo">
            
            <div class="logo-app">
                <img src="../src/assets/statics/facebook.png" alt="">
            </div>

            <div>
                <ul class="section">
                    <li href="#" class="section-Accueil">Accueil</li>
                    <li href="#" class="section-Accueil">Reservation</li> 
                    <li href="#" class="section-Accueil">Avis</li>
                    <li href="#" class="section-Accueil">Contact</li>
                </ul>
            </div>
                
            
         </div>
    </section>
</body>
</html>