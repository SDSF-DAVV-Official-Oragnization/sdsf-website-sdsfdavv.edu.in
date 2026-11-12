document.addEventListener("DOMContentLoaded", function () {
    // kick off admissions page logic once header nav is ready
    function initScripts() {
        const navbar = document.getElementById("navbar");

        // sticky nav handler
        if (navbar) {
            const stickyOffset = navbar.offsetTop;

            window.addEventListener("scroll", () => {
                if (window.pageYOffset > stickyOffset) {
                    navbar.classList.add("sticky");
                } else {
                    navbar.classList.remove("sticky");
                }
            });
        }

        // scroll reveal animations
        const revealElements = document.querySelectorAll(".reveal");
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        revealElements.forEach(el => revealObserver.observe(el));
    }

    // if header is loaded via ajax/fetch, wait until nav tag appears
    const header = document.getElementById("header");
    if (header) {
        const checkHeaderLoaded = setInterval(() => {
            if (header.innerHTML.includes("<nav")) {
                clearInterval(checkHeaderLoaded);
                initScripts();
            }
        }, 50);
    } else {
        initScripts();
    }
});
