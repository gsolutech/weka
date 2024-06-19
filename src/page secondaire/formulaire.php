<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once ("config/conbd.php"); 
        require_once ("config/login.php");
    ?>
    <div class="weka">
        <form action="" method="post">
            <h1>contactez nous</h1>
            <div class="solutech">
                <input type="text" placeholder="se connecter avec facebook">
            </div>
            <div class="solutech">
                <input type="text" placeholder="se connecter avec Google">
            </div>

            <hr class="h">

            <div class="goma">
                <input type="mail" placeholder="Adresse mail">
            </div>
            <div class="goma">
                <input type="password" placeholder="Mots passe">
            </div>
            <div class="btn" align="center">
                <input type="submit" value="">
            </div>
        </form>
    </div>
</body>
</html>