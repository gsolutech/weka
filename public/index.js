document.getElementById('showCalendarRadio').addEventListener('change', function() {
    var calendarVar = document.getElementById('calendar');
    if (this.checked) {
        calendarVar.style.display = 'block';
    } else {
        calendarVar.style.display = 'none';
    }
});

