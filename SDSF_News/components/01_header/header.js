// Keeps the masthead clock & date widget updated every second
function initLiveClock() {
    const clockElement = document.getElementById("mastheadClock");
    const dayElement = document.getElementById("mastheadDay");
    const dateElement = document.getElementById("currentDateFormatted");

    const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    const months = [
        "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ];

    function updateTime() {
        const now = new Date();

        // Time (HH:MM:SS)
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');
        if (clockElement) clockElement.textContent = `${hours}:${minutes}:${seconds}`;

        // Day of Week
        const dayName = days[now.getDay()];
        if (dayElement) dayElement.textContent = dayName;

        // Formatted Full Date
        const monthName = months[now.getMonth()];
        const dateNum = now.getDate();
        const year = now.getFullYear();
        if (dateElement) {
            dateElement.textContent = `${dayName}, ${monthName} ${dateNum}, ${year}`;
        }
    }

    updateTime();
    setInterval(updateTime, 1000);
}
