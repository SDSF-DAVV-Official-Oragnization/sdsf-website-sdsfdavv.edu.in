// Subtle lift on PACE cards hover
document.addEventListener("DOMContentLoaded", function () {
    const paceCards = document.querySelectorAll(".pace-pillar-item");
    paceCards.forEach(card => {
        card.addEventListener("mouseenter", function () {
            this.style.transform = "translateY(-2px)";
        });
        card.addEventListener("mouseleave", function () {
            this.style.transform = "";
        });
    });
});
