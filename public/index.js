/*document.getElementById('showCalendarRadio').addEventListener('change', function() {
    var calendarVar = document.getElementById('calendar');
    if (this.checked) {
        calendarVar.style.display = 'block';
    } else {
        calendarVar.style.display = 'none';
    }
});
*/
document.querySelector('btn_inscrire').addEventListener('click', function() {
    window.location.href = '../src/page secondaire/inscription.php';
});
