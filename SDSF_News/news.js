// Bootstraps all the submodules when the page is ready
document.addEventListener("DOMContentLoaded", function () {
    // live clock in masthead
    if (typeof initLiveClock === "function") {
        initLiveClock();
    }

    // category filtering & url state
    if (typeof initTopicFilter === "function") {
        initTopicFilter();
    }

    // search box filter
    if (typeof initLiveSearch === "function") {
        initLiveSearch();
    }

    // side column notices toggle
    if (typeof initNoticesToggle === "function") {
        initNoticesToggle();
    }
});
