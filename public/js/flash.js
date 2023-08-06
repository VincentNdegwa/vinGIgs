document.addEventListener("DOMContentLoaded", function () {
    const alert = document.querySelector(".alert");

    if (alert) {
        console.log("alert visible");
        setTimeout(() => {
            alert.classList.remove("alert");
            alert.classList.add("alert-hide");
        }, 4000);
    }
});
