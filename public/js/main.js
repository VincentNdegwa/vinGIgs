const applyDisplay = document.querySelector(".apply-easy-hide");

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