
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


document.querySelector('btn_inscrire').addEventListener('click', function() {
    window.location.href = 'inscription.php';
});

