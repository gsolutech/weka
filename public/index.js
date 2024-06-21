
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
        bodySelect.classList.add('blur');
        element.classList.add('someClass');
        element.classList.remove('hidden');
        element.classList.add('flex');       
    } else {
        console.error("Element with id 'someElementId' not found.");
    }
}

document.addEventListener('DOMContentLoaded', function() {
    var button = document.getElementById('btn_inscrire');
    console.log('Button:', button); // Debugging line
    if (button) {
        button.onclick = ShowIscription;
    } else {
        console.error("Button with id 'yourButtonId' not found.");
    }
})