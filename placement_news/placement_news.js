// Placement poster viewer modal
document.addEventListener("DOMContentLoaded", function () {
    const posterModal = document.getElementById("posterLightboxModal");
    const posterImage = document.getElementById("posterModalImage");
    const posterCaption = document.getElementById("posterModalCaption");
    const posterDownload = document.getElementById("posterModalDownload");
    const closeModalBtn = document.getElementById("closePosterModalBtn");
    const modalBackdrop = document.getElementById("posterModalBackdrop");

    function openModal(posterCard) {
        const sourceImage = posterCard.querySelector(".poster-featured-img");
        const companyName = posterCard.querySelector(".company-badge").textContent.trim();
        const posterPath = sourceImage.getAttribute("src");

        posterImage.src = posterPath;
        posterImage.alt = sourceImage.alt;
        posterCaption.textContent = `SDSF DAVV • ${companyName} Placement Poster`;
        posterDownload.href = posterPath;
        posterDownload.download = posterPath.split("/").pop();
        posterModal.classList.add("active");
        posterModal.setAttribute("aria-hidden", "false");
        document.body.style.overflow = "hidden";
        if (closeModalBtn) closeModalBtn.focus();
    }

    function closeModal() {
        if (!posterModal) return;
        posterModal.classList.remove("active");
        posterModal.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "";
    }

    document.querySelectorAll(".placement-poster-card").forEach(function (posterCard) {
        const posterTrigger = posterCard.querySelector(".poster-media-container");
        const viewFullBtn = posterCard.querySelector(".btn-view-full-poster");

        if (posterTrigger) {
            posterTrigger.addEventListener("click", function () {
                openModal(posterCard);
            });
            posterTrigger.addEventListener("keydown", function (e) {
                if (e.key === "Enter" || e.key === " ") {
                    e.preventDefault();
                    openModal(posterCard);
                }
            });
        }
        if (viewFullBtn) {
            viewFullBtn.addEventListener("click", function () {
                openModal(posterCard);
            });
        }
    });

    if (closeModalBtn) closeModalBtn.addEventListener("click", closeModal);
    if (modalBackdrop) modalBackdrop.addEventListener("click", closeModal);

    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape" && posterModal && posterModal.classList.contains("active")) {
            closeModal();
        }
    });
});

window.addEventListener("load", function () {
    if (window.location.hash !== "#rakuten-placement-report") return;

    const rakutenReport = document.getElementById("rakuten-placement-report");
    if (rakutenReport) {
        rakutenReport.scrollIntoView({ behavior: "instant", block: "start" });
    }
});
