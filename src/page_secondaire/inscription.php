<?php
// require_once 'C:/wamp64/www/weka/config/conBd.php';
require_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'conBd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nom = $_POST['username'];
    $prenom = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // $conn = getDatabaseConnection();

    $sql = "INSERT INTO tsalle (nom, prenom, email, password, phone) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nom, $prenom, $email, $hashed_password, $phone);

    if ($stmt->execute()) {
        echo "Nouvel utilisateur enregistré avec succès";
    } else {
        echo "Erreur : " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<div id="inscriptionShow" class="h-screen bg-indigo-80 justify-center items-center hidden z-50 backdrop-blur fixed inset-0">
    <div class="lg:w-2/5 md:w-1/2 w-2/3">
        <form class="bg-white p-8 rounded-lg shadow-lg min-w-full">
            <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Enregistrez-Vous</h1>
            <div>
                <label class="text-gray-800 font-semibold block my-3 text-md" for="username">Nom </label>
                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="username" id="username" placeholder="Nom" />
            </div>
            <div>
                <label class="text-gray-800 font-semibold block my-3 text-md" for="username">Postnom </label>
                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="firstname" id="firstname" placeholder="PostNom" />
            </div>
            <div>
                <label class="text-gray-800 font-semibold block my-3 text-md" for="email">Email</label>
                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="email" id="email" placeholder="@email" />
            </div>
            <div>
                <label class="text-gray-800 font-semibold block my-3 text-md" for="password">Mots de passe</label>
                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="password" id="password" placeholder="Mots de passe" />
            </div>
            <div>
                <label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Numero de telephone</label>
                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="phone" id="phone" placeholder="Votre Numero de telephone" />
            </div>
            <button type="submit" class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Enregistres</button>
            <button type="submit" class="w-full mt-6 mb-3 bg-indigo-100 rounded-lg px-4 py-2 text-lg text-gray-800 tracking-wide font-semibold font-sans">Se Connecter</button>
        </form>
    </div>
</div>