<?php $usernameC = $_COOKIE['nom']; ?>
<!DOCTYPE html>
<html lang="fr">
<?php require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'weka' .  DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'head.php'; ?>

<body>
    <?php
        require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'weka' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'conBd.php';
        require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'weka' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'PAGES' . DIRECTORY_SEPARATOR . 'profilSet.php';
        

        $lettres = str_split($usernameC);
        $premiereLettre = $lettres[0];

        /*require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'weka' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'page_secondaire' . DIRECTORY_SEPARATOR . 'profilSet.php';*/

    ?>
    <section>
        <div id="main_container" class="photoUpload w-full h-96 relative flex flex-col text-center">

            <label for="showFilesDialogCouv">
                <div class="w-full h-44 bge-cyan-custom relative overflow-hidden" id="couverture_image_container">
                    <img src="../src/assets/salles/couverture/<?php echo $photo_couverture_name?>" alt="" class="relative w-full h-full object-cover object-center hidden" id="couvertureImage">          
                    <form action="" method="POST" enctype="multipart/form-data" id="uploadCouvertureForm">
                        <input type="file" name="couverture_picture" id="showFilesDialogCouv" class="hidden" accept="image/.jpeg, .png, .jpg, .gif">
                        <label for="showFilesDialogCouv" class="right-4 bottom-2 absolute text-2xl hover:bg-opacity-75" onclick="sendPiCheck();">
                            <i class="fa-solid fa-pen-to-square" id="profilchange"></i>
                        </label>
                        <button type="submit" name="send_couverture_picture" id="send_couverture_picture" class="hidden">send</button>
                    </form>     
                </div>
            </label>
            <label for="showFilesDialog">
                <div id="profil_container" class="profilUp absolute w-44 h-44 rounded-full ml-20 top-20 border-8 border-solid border-white bge-cyan-custom items-center justify-center flex">
                    <p class="text-white text-8xl font-bold" id="profil_image_default"><?php echo $premiereLettre ?></p>
                    <img src="../src/assets/salles/profil/<?php echo $photo_profil_name?>" alt="" class="relative w-full h-full object-cover rounded-full hidden" id="profileImage">
                    <form action="" method="POST" enctype="multipart/form-data" id="uploadForm">
                        <input type="file" name="profile_picture" id="showFilesDialog" class="hidden" accept="image/.jpeg, .png, .jpg, .gif">
                        <label for="showFilesDialog" class="right-4 bottom-2 absolute text-2xl hover:bg-opacity-75" onclick="sendPiCheck();">
                            <i class="fa-solid fa-pen-to-square" id="profilchange"></i>
                        </label>
                        <button type="submit" name="send_profile_picture" id="send_profile_picture" class="hidden">send</button>
                    </form>
                </div>
            </label>
            <ul class="w-12 h-12 bg-red-500 rounded-full absolute left-6 top-6 items-center justify-center flex">
                <i class='bx bx-left-arrow-alt'></i>
            </ul>
            <p class="text-red-600 font-bold"><?php echo $error ?></p>
        </div>
    </section>

    <section>

    </section>

</body>
</html>