<?php

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'conBd.php';
function rechercher() {}
$error = "";
if (isset($_GET['inputSearch'])) {
    $recherche_nom = htmlspecialchars($_GET['inputSearch']);
    $sql_recherche = $bdd->prepare("SELECT * FROM tinfosalle WHERE nomSalle =?");
    $sql_recherche->execute(array($recherche_nom));
    $total_recherche = $sql_recherche->rowCount();
    $resultat_recherche = $sql_recherche->fetchAll(PDO::FETCH_ASSOC);

    if ($total_recherche == 0) {
        $error = 'Aucun élement trouvé  <br/>';
        echo $error;
    } else {
        foreach ($resultat_recherche as $res) {
            $nom_items = $res['nomSalle'];
            $prix_items = $res['prix1'];
            $adresse_items = $res['adresse'];
            $image_items_name = $res['photo'];

            // affiche de la recherche
            echo " 
                    <div class=\"w-96 mx-auto bg-gray-100 border-2 border-solid border-gray-200 m-5 shadow-lg overflow-hidde relative px-3 py-3\">
                    <img class=\"w-full h-48 object-cover  relative\" src=\"../src/assets/salles/profil/$image_items_name\" alt=\"Asha La Villa\">
                        <div class=\"flex flex-row \">
                            <ul class=\"flex flex-row justify-between items-center mb-4 w-7/12\">
                                <h3 class=\"text-xl font-semibold mb-2 pl-3\">$nom_items</h3>
                            </ul>
                            <ul class=\"flex justify-end items-end w-5/12\">
                                <button class=\"flex justify-end items-end pr-3\"><i class='bx bx-heart text-5xl'></i></button>
                            </ul>
                        </div>
                        <div class=\"flex items-center mb-4 pl-3\">
                            <!-- Étoiles de notation -->
                            <svg class=\"w-5 h-5 text-yellow-400\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M9.049.825L7.389 6.323H2.294a1 1 0 0 0-.743 1.669l4.056 3.347-1.613 5.347a1 1 0 0 0 1.541 1.069L10 15.27l4.465 2.985a1 1 0 0 0 1.541-1.069l-1.613-5.347 4.056-3.347a1 1 0 0 0-.743-1.669h-5.095L10.951.825a1 1 0 0 0-1.902 0z\"/></svg>
                            <svg class=\"w-5 h-5 text-yellow-400\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M9.049.825L7.389 6.323H2.294a1 1 0 0 0-.743 1.669l4.056 3.347-1.613 5.347a1 1 0 0 0 1.541 1.069L10 15.27l4.465 2.985a1 1 0 0 0 1.541-1.069l-1.613-5.347 4.056-3.347a1 1 0 0 0-.743-1.669h-5.095L10.951.825a1 1 0 0 0-1.902 0z\"/></svg>
                            <svg class=\"w-5 h-5 text-yellow-400\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M9.049.825L7.389 6.323H2.294a1 1 0 0 0-.743 1.669l4.056 3.347-1.613 5.347a1 1 0 0 0 1.541 1.069L10 15.27l4.465 2.985a1 1 0 0 0 1.541-1.069l-1.613-5.347 4.056-3.347a1 1 0 0 0-.743-1.669h-5.095L10.951.825a1 1 0 0 0-1.902 0z\"/></svg>
                            <svg class=\"w-5 h-5 text-yellow-400\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M9.049.825L7.389 6.323H2.294a1 1 0 0 0-.743 1.669l4.056 3.347-1.613 5.347a1 1 0 0 0 1.541 1.069L10 15.27l4.465 2.985a1 1 0 0 0 1.541-1.069l-1.613-5.347 4.056-3.347a1 1 0 0 0-.743-1.669h-5.095L10.951.825a1 1 0 0 0-1.902 0z\"/></svg>
                            <svg class=\"w-5 h-5 text-gray-300\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M9.049.825L7.389 6.323H2.294a1 1 0 0 0-.743 1.669l4.056 3.347-1.613 5.347a1 1 0 0 0 1.541 1.069L10 15.27l4.465 2.985a1 1 0 0 0 1.541-1.069l-1.613-5.347 4.056-3.347a1 1 0 0 0-.743-1.669h-5.095L10.951.825a1 1 0 0 0-1.902 0z\"/></svg>
                        </div>
                        <div class=\"flex justify-between items-center mb-4\">
                            <span class=\"bg-green-400 text-white px-4 py-2 rounded-3xl ml-3\">Disponible</span>
                            <span class=\"text-xl font-semibold pr-3\">$$prix_items</span>
                        </div>
                        <hr class=\"w-full bg-black opacity-20 border-1 border-solid border-black mb-3\">
                        <div class=\"flex flex-row justify-between items-center pb-3 pr-3\">
                            <ul class=\"flex flex-row justify-between items-center mb-4 w-7/12\">
                                <i class='bx bx-been-here text-xl'></i>
                                <span class=\"text-gray-500 text-xs absolute pl-8\"> $adresse_items</span>
                            </ul>
                            <ul class=\"w-5/12 justify-center items-center flex\">
                                <button class=\"bge-cyan-custom text-white px-4 py-2 mb-4hover:bg-cyan-500 w-full h-12 text-xs\">Réservez Maintenant</button>
                            </ul>
                        </div>
                            
                    </div>
                </div>

                <script type=\"text/javascript\" src=\"../../public/index.js\">showFiltre_recherche();</script>
                ";
        }
    }
}
?>