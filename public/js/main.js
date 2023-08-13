const applyDisplay = document.querySelector(".apply-easy-hide");

const menu = document.querySelector(".menu-hum");
const navbars = document.querySelector(".navbars");
const icon = menu.querySelector("i");

function displayApply() {
    if (applyDisplay.classList.contains("apply-easy-hide")) {
        applyDisplay.classList.remove("apply-easy-hide");
        applyDisplay.classList.add("apply-easy");
    } else {
        applyDisplay.classList.remove("apply-easy");
        applyDisplay.classList.add("apply-easy-hide");
    }
}
function exitApply() {
    applyDisplay.classList.remove("apply-easy");
    applyDisplay.classList.add("apply-easy-hide");
}

function OpenOverlay() {
    let overlay = document.querySelector(".overlay-applicants-hide");
    overlay.classList.remove("overlay-applicants-hide");
    overlay.classList.add("overlay-applicants");
}
function CloseOverlay() {
    let overlay = document.querySelector(".overlay-applicants");
    overlay.classList.remove("overlay-applicants");
    overlay.classList.add("overlay-applicants-hide");
}

menu.addEventListener("click", (ev) => {
    if (navbars.classList.contains("navbars")) {
        navbars.classList.remove("navbars");
        navbars.classList.add("navbars-active");
        icon.classList.remove("bx-menu-alt-right");
        icon.classList.add("bx-x");

    } else {
        navbars.classList.remove("navbars-active");
        navbars.classList.add("navbars");
        icon.classList.remove("bx-x");
        icon.classList.add("bx-menu-alt-right");
    }
});