// Developer profile modal toggle
function openDeveloperModal() {
    const modal = document.getElementById("developerModal");
    if (!modal) return;
    modal.style.display = "flex";
    document.body.style.overflow = "hidden";
}

function closeDeveloperModal(event) {
    const modal = document.getElementById("developerModal");
    if (modal) {
        modal.style.display = "none";
        document.body.style.overflow = "auto";
    }
}

// Close on Escape Key
document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
        const modal = document.getElementById("developerModal");
        if (modal && modal.style.display !== "none") {
            closeDeveloperModal();
        }
    }
});

// Auto-open Developer modal if navigated via ?view=developer or #developer
document.addEventListener("DOMContentLoaded", function () {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get("view") === "developer" || window.location.hash === "#developer") {
        openDeveloperModal();
    }
});
