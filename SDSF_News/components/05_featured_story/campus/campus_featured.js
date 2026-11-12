// Campus life button feedback
document.addEventListener("DOMContentLoaded", function () {
    const btnExplore = document.getElementById("btnExploreCampusLife");
    if (btnExplore) {
        btnExplore.addEventListener("click", function () {
            this.style.transform = "scale(0.98)";
            setTimeout(() => {
                this.style.transform = "";
            }, 150);
        });
    }
});
