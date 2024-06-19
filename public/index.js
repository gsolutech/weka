document.getElementById('showCalendarRadio').addEventListener('change', function() {
    var calendarVar = document.getElementById('calendar');
    if (this.checked) {
        calendarVar.style.class = 'block';
    } else {
        calendarVar.style.class = 'none';
    }
});

document.querySelector('btn_inscrire').addEventListener('click', function() {
    window.location.href = 'inscription.php';
});

