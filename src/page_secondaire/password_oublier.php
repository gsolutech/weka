<div>
    <form method="POST">
        <div class="renitialisation">
            <label for="email">Email</label>
            <input type="email" placeholder="Entre votre mail" name="email" required>
            <button type="submit" >Envoyer</button>
        </div>
    </form>
</div>

<?php
if (isset($_POST['mail']))
{
    $password=uniqid();
    $hashedPassword= password_hash($password,PASSWORD_DEFAULT);

    $message= "Bonjour, voici votre nouveau mots passe: $password";
    $headers = 'content-type: text/plain; charset="utf-8"'." ";

    if(mail($_POST['email'], 'Mot de passe oublié', $message, $headers))
    {
      $sql = "UPDATE users SET password = ? WHERE email = ?";
      $stmt->execute([$hashedPassword, $_POST['email']]);  
      echo "mail envoyé";
    }
}
?>