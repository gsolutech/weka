// calendar show

document.getElementById('showCalendarRadio').addEventListener('change', function() {
    if (this.checked) {
        let calendarEl = document.getElementById('calendarDiv');
        console.log("Element : " + calendarEl);

        if (calendarEl) {
            calendarEl.classList.remove('hidden');
            calendarEl.classList.add('flex');
        } else {
            console.error("Element with id 'calendarDiv' not found.");
        }
    } else {
        calendarEl.className = 'none'; 
    }
});

// page d'inscription show
function ShowIscription() {
    let element = document.getElementById('inscriptionShow');
    let bodySelect = document.querySelector('body');
    let blurShow = document.getElementById('closePop');
    console.log('Element:', element);

    if (element) {
        element.classList.add('someClass');
        element.classList.remove('hidden');
        element.classList.add('flex'); 
        bodySelect.body.classList.add('backdrop-blur');  
        blurShow.classList.add('h-screen');    
    } else {
        console.error("Element with id 'someElementId' not found.");
    }
}

function closeInscription() {
    let element = document.getElementById('inscriptionShow');
    element.classList.remove('flex');
    element.classList.add('hidden');
}
function closeInscription(event) {
    if (event.target.id === 'inscriptionShow' || event.target.classList.contains('close')) {
        let element = document.getElementById('inscriptionShow');
        element.classList.remove('flex');
        element.classList.add('hidden');
        document.body.classList.remove('backdrop-blur'); // Remove blur effect from body
    }
}

document.addEventListener('DOMContentLoaded', 'click', function() {
    let button = document.getElementById('btn_inscrire');
    console.log('Button:', button); // Debugging line
    if (button) {
        button.onclick = ShowIscription;
    } else {
        console.error("Bouton 'btn_inscrire' non trouvé.");
    }
    let buttonClose = document.getElementById("closePop");
    console.log('Button:', buttonClose); // Debugging line
    if (buttonClose) {
        button.onclick = closeInscription;
    } else {
        console.log("Bouton 'btn_close_pop' non trouvé.");
    }
})