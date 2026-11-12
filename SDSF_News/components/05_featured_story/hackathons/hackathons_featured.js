// Hackathon section tag hover effects
function initHackathonsFeatured() {
    const hackathonView = document.getElementById("featured-view-hackathon");
    if (!hackathonView) return;

    const tracks = hackathonView.querySelectorAll(".track-tag");
    tracks.forEach((tag) => {
        tag.addEventListener("mouseenter", function () {
            this.style.transform = "translateY(-2px)";
            this.style.borderColor = "#f59e0b";
        });
        tag.addEventListener("mouseleave", function () {
            this.style.transform = "";
            this.style.borderColor = "";
        });
    });
}

document.addEventListener("DOMContentLoaded", initHackathonsFeatured);
