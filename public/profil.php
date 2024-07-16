<!DOCTYPE html>
<html lang="en">
<?php require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'weka' .  DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'head.php'; ?>
<body>
    <?php  
        require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'weka' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'conBd.php';
    ?>
    <section>
        <div class="photoUpload w-full h-96 relative flex flex-col">
            <div class="w-full h-44 bge-cyan-custom relative">
                <button class="right-10 bottom-5 absolute"><i class="fa-solid fa-pen-to-square" class="text-white"></i></button>
            </div>
            <div class="profilUp bg-red-300 absolute w-44 h-44 rounded-full ml-20 top-20 border-8 border-solid border-white">
                <img src="../src/assets/salles/profil/12.jpg" alt="" class="relative w-full h-full rounded-full bg-cover">
                <button class="right-4 bottom-2 absolute text-2xl"><i class="fa-solid fa-pen-to-square" id="profilchange"></i></button>
            </div>
        </div>
    </section>
</body>
</html>