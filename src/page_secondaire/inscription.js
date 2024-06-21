document.addEventListener('DOMContentLoaded', function() {
    const openAlertBtn = document.getElementById('openAlertBtn');
    const closeAlertBtn = document.getElementById('closeAlertBtn');
    const alertForm = document.getElementById('alertForm');
    const alertFormElement = document.getElementById('alertFormElement');

    // Ouvrir l'alerte
    openAlertBtn.addEventListener('click', function() {
        alertForm.classList.remove('hidden');
    });

    // Fermer l'alerte
    closeAlertBtn.addEventListener('click', function() {
        alertForm.classList.add('hidden');
    });

    // Gestion de la soumission du formulaire
    alertFormElement.addEventListener('submit', function(event) {
        event.preventDefault(); // Empêche la soumission par défaut du formulaire
        const inputField = document.getElementById('inputField').value;
        alert(`Valeur soumise: ${inputField}`);
        alertForm.classList.add('hidden'); // Fermer l'alerte après la soumission
    });
});
