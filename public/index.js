
// document.addEventListener('DOMContentLoaded', function() {
//     let calendarEl = document.getElementById('calendar');

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
