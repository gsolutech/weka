document.getElementById('showCalendarRadio').addEventListener('change', function() {
    var calendar = document.getElementById('calendar');
    if (this.checked) {
        calendar.style.display = 'block';
    } else {
        calendar.style.display = 'none';
    }
});