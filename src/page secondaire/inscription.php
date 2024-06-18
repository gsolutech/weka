<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <div id="alertForm" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl mb-4">Inscrivez-vous</h2>
            <form id="alertFormElement">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Nom :</label>
                    <input type="text" id="inputField" class="w-full px-3 py-2 border border-gray-300 rounded" required>
                    <label for="firstname" class="block text-gray-700">Prenom :</label>
                    <input type="text" id="inputField" class="w-full px-3 py-2 border border-gray-300 rounded" required>
                    <label for="email" class="block text-gray-700">Email :</label>
                    <input type="email" id="inputField" class="w-full px-3 py-2 border border-gray-300 rounded" required>
                    <label for="email" class="block text-gray-700">Numero de Tel :</label>
                    <input type="texte" id="inputField" class="w-full px-3 py-2 border border-gray-300 rounded" required>
                </div>
                <div class="flex justify-end">
                    <button type="button" id="closeAlertBtn" class="px-4 py-2 bg-red-500 text-white rounded mr-2">Fermer</button>
                    <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded">Soumettre</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>