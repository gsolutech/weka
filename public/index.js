function canlendarShow() {
    // document.getElementsById('calendar').style.opacity = 100;
}

document.addEventListener('DOMContentLoaded', function() {
    const inscript = document.querySelector('btn_inscrire'),
    
    function showPage(page) {
        // Afficher la page sélectionnée
        page.classList.add('btn_inscrire');
    }

    inscript.addEventListener('click', function() {
        showPage('btn_inscrire');
    });
})