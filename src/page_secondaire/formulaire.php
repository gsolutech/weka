
<div id="showConnexion" class="w-11/12 sm:w-2/3 md:w-1/2 lg:w-2/5 mx-auto relative">
    <form action="" method="POST" class="bg-gray-300 w-full h-full p-2 sm:p-2 md:p-4 rounded-lg relative">
        <button class="absolute top-1 right-1" onclick="closeInscription();"><i class="fa-solid fa-rectangle-xmark" id="closeConnexion"></i></button>
        <h1 class="text-3xl text-center mt-5 mb-5">Connectez vous</h1>

        <div class="text-center justify-center items-center flex flex-col">
            <button class=" w-3/4 p-3 h-12 scroll-p-15 flex flex-row rounded-3xl text-center mb-2 text-gray-400 bg-white justify-center items-center" type="submit ">
                <img class=" pr-5 h-8" src="../src/assets/statics/facebook.png" alt="">
                se connecter avec facebook
                <button>
                    <button class="w-3/4 p-3 h-12 scroll-p-15 flex flex-row rounded-3xl text-center text-gray-400 bg-white justify-center items-center" type="submit">
                        <img class=" pr-5 h-8" src="../src/assets/statics/google.png" alt="">
                        <p class="text-center">se connecter avec Google</p>
                        <button>
        </div>

        <div class="flex my-1 items-center justify-center">
            <hr class="bg-black text-black font-bold w-2/5">
            <p class="text-2xl p-2">ou</p>
            <hr class="bg-black font-bold w-2/5">
        </div>

        <div class="text-center mt-2">
            <input class="w-3/4 m-2 px-3 py-2 border-0 rounded-md bg-white" type="mail" name="email" placeholder="Adresse mail">
            <input class="w-3/4 m-2 px-3 py-2 border-0 rounded-md bg-white" type="password" name="password" placeholder="Mots passe"> <br>
            <i style="color:red"><?php echo""; ?></i>
        </div>

        <div class="text-center">
            <!-- <input class=" px-10 py-20 border-0 decoration-white text-base rounded-md my-50" type="submit" value="Se connecter"> -->
            <button name="btnconnexion" class="px-10 py-2 mb-4 mt-3 border-0 text-white  bg-blue-500 text-base rounded-md my-50 " type="submit">
                se connecter</button>

            <p>Mots passe oubliée? <a class="text-red-500" href="#">Cliquez ici</a> </p>
            <p>Vous n'avez pas un compte? <a class="text-red-500 cursor-pointer" onclick="showInscriptionPage();">Créer un compte</a> </p>
        </div>
    </form>
</div>

<?php require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'page_secondaire' . DIRECTORY_SEPARATOR . 'formulaireCheck.php' ?>