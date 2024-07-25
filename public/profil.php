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
        <div id="main_container" class="photoUpload w-full h-96 relative flex flex-col">
            <div class="w-full h-44 bge-cyan-custom relative overflow-hidden" id="couverture_image_container">
                <img src="../src/assets/salles/profil/<?php echo $photo_couverture_name?>" alt="" class="relative w-full h-full object-cover object-center hidden" id="couvertureImage">          
                <button class="right-10 bottom-5 absolute"><i class="fa-solid fa-pen-to-square" class="text-white"></i></button>
                
            </div>
            <div id="profil_container" class="profilUp absolute w-44 h-44 rounded-full ml-20 top-20 border-8 border-solid border-white bge-cyan-custom items-center justify-center flex">
                <p class="text-white text-8xl font-bold" id="profil_image_default"><?php echo $premiereLettre ?></p>
                <img src="../src/assets/salles/profil/<?php echo $photo_profil_name?>" alt="" class="relative w-full h-full object-cover rounded-full hidden" id="profileImage">
                <form action="" method="POST" enctype="multipart/form-data" id="uploadForm">
                    <input type="file" name="profile_picture" id="showFilesDialog" class="hidden" accept="image/*">
                    <label for="showFilesDialog" class="right-4 bottom-2 absolute text-2xl hover:bg-opacity-75" onclick="sendPiCheck();">
                        <i class="fa-solid fa-pen-to-square" id="profilchange"></i>
                    </label>
                    <button type="submit" name="send_profile_picture" id="send_profile_picture" class="hidden">send</button>
                </form>

            </div>
        </div>
    </section>

    <section>

    </section>

</body>
</html>