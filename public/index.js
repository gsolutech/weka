
// document.addEventListener('DOMContentLoaded', function() {
//     let calendarEl = document.getElementById('calendar');


    let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth'
    });

    document.getElementById('showCalendarRadio').addEventListener('change', function() {
        if (this.checked) {
            calendarEl.className = 'block';
            calendar.render();  // Render le calendrier lorsque le div est visible
        } else {
            calendarEl.className = 'none'; 
        }
    });
//     let calendar = new FullCalendar.Calendar(calendarEl, {
//         initialView: 'dayGridMonth'
//     });

//     document.getElementById('showCalendarRadio').addEventListener('change', function() {
//         if (this.checked) {
//             calendarEl.className = 'block';
//             calendar.render();  // Render le calendrier lorsque le div est visible
//         } else {
//             calendarEl.className = 'none';
//         }
//     });
// });
document.addEventListener("DOMContentLoaded", function() {
    let dateInput = document.getElementById("calendar");
    dateInput.focus();
    dateInput.click();
})


function ShowIscription () {
    let modal = document.getElementById("inscriptionShow");
    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
    else {
        alert("Elément introuvable");
    }
};

// $('input[type="radio"]').on('change', function(e){
//     if(e.target.checked){
//         $('#inscriptionShow').modal();
//     }
// });

function ShowIscription() {
    let element = document.getElementById('inscriptionShow');
    let bodySelect = document.querySelector('body');
    console.log('Element:', element); // Debugging line
    if (element) {
        element.classList.add('someClass');
        element.classList.remove('hidden');
        element.classList.add('flex'); 
        document.body.classList.add('backdrop-blur');      
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

document.addEventListener('DOMContentLoaded', function() {
    let button = document.getElementById('btn_inscrire');
    console.log('Button:', button); // Debugging line
    if (button) {
        button.onclick = ShowIscription;
    } else {
        console.error("Bouton 'btn_inscrire' non trouvé.");
    }
    let buttonClose = document.getElementById("btn_close_pop");
    console.log('Button:', buttonClose); // Debugging line
    if (buttonClose) {
        button.onclick = closeInscription;
    } else {
        console.log("Bouton 'btn_close_pop' non trouvé.");
    }
})