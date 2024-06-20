<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <script src="index.js" defer></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        <!-- <div id="calendarDiv" class="absolute bg-red-500 w-96 h-96 top-14">
            <p class="text-white">Choisissez une date </p>
        </div> -->

        <!-- dfndjfjf -->
    </section>

    <section class="py-12">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h2 class="text-4xl font-semibold mb-4">Acheivement</h2>
            <p class="mb-8 text-gray-600">Grâce à la confiance de nos utilisateurs, Weka a atteint des sommets en matière de réservations en ligne. Nous avons facilité des milliers de réservations avec un taux de satisfaction élevé et des retours positifs constants. Rejoignez-nous et faites partie de notre succès !</p>
            <div class="flex justify-center space-x-2 mb-12">
                <!-- Images des utilisateurs -->
                <div class="flex">
                    <div class="w-12 h-12 rounded-full overflow-hidden -ml-4 first:ml-0 relative z-10">
                        <img src="../src/assets/Serena/11.jpg" alt="Personne 1" class="w-full h-full object-cover">
                    </div>
                    <div class="w-12 h-12 rounded-full overflow-hidden -ml-4 relative z-9">
                        <img src="../src/assets/Serena/12.jpg" alt="Personne 2" class="w-full h-full object-cover">
                    </div>
                    <div class="w-12 h-12 rounded-full overflow-hidden -ml-4 relative z-8">
                        <img src="../src/assets/Serena/13.jpg" alt="Personne 3" class="w-full h-full object-cover">
                    </div>
                    <div class="w-12 h-12 rounded-full overflow-hidden -ml-4 relative z-7">
                        <img src="../src/assets/Serena/14.jpg" alt="Personne 4" class="w-full h-full object-cover">
                    </div>
                    <div class="w-12 h-12 rounded-full overflow-hidden -ml-4 relative z-6">
                        <img src="../src/assets/Serena/9.jpg" alt="Personne 5" class="w-full h-full object-cover">
                    </div>
                </div>

            </div>
        </div>
        <div class="">
            <h2 class="text-4xl font-semibold mb-8 text-center">Les Réservations</h2>
            <div class="w-96 mx-auto bg-white shadow-lg overflow-hidden">
                <img class="w-full h-48 object-cover" src="../src/assets/Serena/3.jpg" alt="Asha La Villa">
                <div class="p-6 flex flex-col relative">
                    <div class="flex flex-row ">
                        <ul class="flex flex-row justify-between items-center mb-4 w-7/12">
                            <h3 class="text-xl font-semibold mb-2">Asha La Villa</h3>
                        </ul>
                        <ul class="flex justify-end items-end w-5/12">
                            <button class="flex justify-end items-end"><i class='bx bx-heart text-5xl'></i></button>
                        </ul>
                    </div>
                    <div class="flex items-center mb-4">
                        <!-- Étoiles de notation -->
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049.825L7.389 6.323H2.294a1 1 0 0 0-.743 1.669l4.056 3.347-1.613 5.347a1 1 0 0 0 1.541 1.069L10 15.27l4.465 2.985a1 1 0 0 0 1.541-1.069l-1.613-5.347 4.056-3.347a1 1 0 0 0-.743-1.669h-5.095L10.951.825a1 1 0 0 0-1.902 0z"/></svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049.825L7.389 6.323H2.294a1 1 0 0 0-.743 1.669l4.056 3.347-1.613 5.347a1 1 0 0 0 1.541 1.069L10 15.27l4.465 2.985a1 1 0 0 0 1.541-1.069l-1.613-5.347 4.056-3.347a1 1 0 0 0-.743-1.669h-5.095L10.951.825a1 1 0 0 0-1.902 0z"/></svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049.825L7.389 6.323H2.294a1 1 0 0 0-.743 1.669l4.056 3.347-1.613 5.347a1 1 0 0 0 1.541 1.069L10 15.27l4.465 2.985a1 1 0 0 0 1.541-1.069l-1.613-5.347 4.056-3.347a1 1 0 0 0-.743-1.669h-5.095L10.951.825a1 1 0 0 0-1.902 0z"/></svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049.825L7.389 6.323H2.294a1 1 0 0 0-.743 1.669l4.056 3.347-1.613 5.347a1 1 0 0 0 1.541 1.069L10 15.27l4.465 2.985a1 1 0 0 0 1.541-1.069l-1.613-5.347 4.056-3.347a1 1 0 0 0-.743-1.669h-5.095L10.951.825a1 1 0 0 0-1.902 0z"/></svg>
                        <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049.825L7.389 6.323H2.294a1 1 0 0 0-.743 1.669l4.056 3.347-1.613 5.347a1 1 0 0 0 1.541 1.069L10 15.27l4.465 2.985a1 1 0 0 0 1.541-1.069l-1.613-5.347 4.056-3.347a1 1 0 0 0-.743-1.669h-5.095L10.951.825a1 1 0 0 0-1.902 0z"/></svg>
                    </div>
                    <div class="flex justify-between items-center mb-4">
                        <span class="bg-green-400 text-white px-4 py-2 rounded-3xl">Disponible</span>
                        <span class="text-xl font-semibold">$300</span>
                    </div>
                    <hr class="w-full bg-black opacity-20 border-1 border-solid border-black mb-3">
                    <div class="flex flex-row justify-between items-center">
                        <ul class="flex flex-row justify-between items-center mb-4 w-7/12">
                            <i class='bx bx-been-here text-xl'></i>
                            <span class="text-gray-500 text-xs">Av. Eugène Sumi, LA Corniche (fait Musée de Carre)</span>
                        </ul>
                        <ul class="w-5/12">
                            <button class="bg-cyan-custom text-white px-4 py-2 hover:bg-blue-500 w-full h-12 text-xs">Réservez Maintenant</button>
                        </ul>
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
</section>


    <section>
        <!-- greg -->
    </section>
</body>
</html>