function updateCountdown() {
    const now = new Date();
    const endDate = new Date(now.getFullYear(), now.getMonth(), now.getDate()); // Set end date to today
    endDate.setHours(23, 59, 59); // Set end time to 23:59:59 of today

    const difference = endDate - now;

    if (difference <= 0) {
        // If the countdown has ended, display 0 for all values
        document.querySelector('.days').textContent = formatTime(0);
        document.querySelector('.hours').textContent = formatTime(0);
        document.querySelector('.minutes').textContent = formatTime(0);
        document.querySelector('.secs').textContent = formatTime(0);
        return;
    }

    const totalSeconds = Math.floor(difference / 1000);

    const days = Math.floor(totalSeconds / (24 * 60 * 60));
    const hours = Math.floor((totalSeconds % (24 * 60 * 60)) / (60 * 60));
    const minutes = Math.floor((totalSeconds % (60 * 60)) / 60);
    const seconds = totalSeconds % 60;

    document.querySelector('.days').textContent = formatTime(days);
    document.querySelector('.hours').textContent = formatTime(hours);
    document.querySelector('.minutes').textContent = formatTime(minutes);
    document.querySelector('.secs').textContent = formatTime(seconds);
}

// Function to add leading zero to single-digit numbers
function formatTime(time) {
    return time < 10 ? `0${time}` : time;
}

// Update the countdown every second
setInterval(updateCountdown, 1000);

// Initial call to update countdown immediately
updateCountdown();
