// Placement records page scripts
document.addEventListener("DOMContentLoaded", function () {
    // smooth scroll to records tables if hash provided
    if (window.location.hash) {
        const target = document.querySelector(window.location.hash);
        if (target) {
            setTimeout(() => target.scrollIntoView({ behavior: "smooth" }), 100);
        }
    }
});
