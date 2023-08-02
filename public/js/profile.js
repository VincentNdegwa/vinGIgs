const fileInput = document.getElementById("profile-image");

const imagePreview = document.getElementById("profile-image-preview");
const editBtn = document.querySelector(".profile-edit-btn");
const profileForm = document.querySelector(".profile-form");

editBtn.addEventListener("click", () => {
    let inputs = profileForm.querySelectorAll("input");
    inputs.forEach((item) => {
        if (item.type != "button") {
            item.style.border = "1px solid #4942e4";
        } else {
            item.style.background = "#4942e4";
        }
        item.readOnly = false;
    });
    editBtn.value = "Edit Profile";
    let newSubmitBtn = editBtn;
    newSubmitBtn.addEventListener("click", () => {
        profileForm.submit();
    });
});
fileInput.addEventListener("change", function (event) {
    const selectedFile = event.target.files[0];

    if (selectedFile) {
        const reader = new FileReader();
        reader.onload = function () {
            imagePreview.src = reader.result;
        };

        reader.readAsDataURL(selectedFile);
    }
});
