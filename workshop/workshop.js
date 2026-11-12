// Workshop page interactions
document.addEventListener("DOMContentLoaded", function () {
    // scroll reveal observer for workshop cards
    const cards = document.querySelectorAll(".workshop-card, .event-item");
    if (cards.length && "IntersectionObserver" in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        cards.forEach(card => observer.observe(card));
    }
});
