// Career Nirmaan timetable filters & ticker drag
document.addEventListener("DOMContentLoaded", function () {
    // weekday / weekend filter tabs
    const filterButtons = document.querySelectorAll(".filter-tab-btn");
    const tableRows = document.querySelectorAll(".career-timetable tbody tr.timetable-row");

    if (filterButtons.length > 0) {
        filterButtons.forEach((btn) => {
            btn.addEventListener("click", function () {
                filterButtons.forEach((b) => b.classList.remove("active"));
                this.classList.add("active");

                const filterValue = this.getAttribute("data-filter");
                tableRows.forEach((row) => {
                    const rowType = row.getAttribute("data-type");
                    if (filterValue === "all" || rowType === filterValue) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                });
            });
        });
    }

    // auto-highlight current day's row
    const days = [
        "SUNDAY",
        "MONDAY",
        "TUESDAY",
        "WEDNESDAY",
        "THURSDAY",
        "FRIDAY",
        "SATURDAY"
    ];
    const todayIndex = new Date().getDay();
    const todayName = days[todayIndex];

    tableRows.forEach((row) => {
        const dayBadge = row.querySelector(".day-badge");
        if (dayBadge && dayBadge.textContent.trim().toUpperCase() === todayName) {
            row.classList.add("today-row");
            const indicator = document.createElement("span");
            indicator.className = "today-indicator";
            indicator.textContent = " • Today";
            indicator.style.fontSize = "0.7rem";
            indicator.style.fontWeight = "600";
            indicator.style.color = "#dc2626";
            dayBadge.appendChild(indicator);
        }
    });

    // drag-to-scroll ticker
    const tickerTrack = document.getElementById("noticesTicker");
    const marqueeContainer = document.getElementById("marqueeContainer");
    const marqueeContent = document.getElementById("marqueeContent");

    if (tickerTrack && marqueeContent) {
        let isDown = false;
        let startX = 0;

        tickerTrack.addEventListener("mousedown", (e) => {
            isDown = true;
            tickerTrack.style.cursor = "grabbing";
            marqueeContent.style.animationPlayState = "paused";
            startX = e.pageX;
        });

        window.addEventListener("mouseup", () => {
            if (!isDown) return;
            isDown = false;
            if (tickerTrack) tickerTrack.style.cursor = "grab";
            if (marqueeContent) marqueeContent.style.animationPlayState = "";
        });

        tickerTrack.addEventListener("mouseleave", () => {
            if (!isDown) {
                if (marqueeContent) marqueeContent.style.animationPlayState = "";
            }
        });

        tickerTrack.addEventListener("mousemove", (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX;
            const walk = (x - startX) * 1.2;
            marqueeContainer.scrollLeft = marqueeContainer.scrollLeft - walk;
            startX = x;
        });
    }
});
