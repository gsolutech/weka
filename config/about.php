<?php  require_once dirname(dirname(__DIR__)) .DIRECTORY_SEPARATOR . 'WEKA' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'conBd.php';
      
      $req = "laptop";
      $sql = $bdd -> prepare("SELECT * FROM tproduit WHERE nomCollection = ?");
      $sql -> execute(array($req));
  
      $total = $sql -> rowCount();
      $resultat = $sql -> fetchAll(PDO::FETCH_ASSOC);
  
      $error = "";
      if ($total != 0) {
          foreach ($resultat as $res) {
              $nom_items = $res['nom'];
              $prix_items = $res['prix'];
              $description_items = $res['description'];
              $image_items_name = $res['image'];
              echo " 

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
                            <button class="bg-cyan-custom text-white px-4 py-2 hover:bg-cyan-500 w-full h-12 text-xs">Réservez Maintenant</button>
                        </ul>
                    </div>
                        
                </div>
            </div>

                  <div class=\"sub-container\">
                      <div class=\"image-show\">
                          <img src=\"../src/images/articles/$image_items_name\" alt=\"\">
                      </div>
                      <div class=\"explore\">
                          <div class=\"part\">
                              <label>$nom_items</label>
                              <p>$description_items</p>
                          </div>
                          <div class=\"part\">
                              <a href=\"#\"><button>Buy</button></a>
                          </div>
                      </div>
                  </div>";
          }
      } else {
          $error = "Aucun élement trouvé ! ";
      }
 ?>

