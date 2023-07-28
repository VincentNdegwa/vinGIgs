const inputs = document.querySelectorAll(".input");
// const errorBox = document.querySelector(".error");
let errorBox;
window.addEventListener("load", () => {
    const errDisplay = document.createElement("div");
    const p_error = document.createElement("p");
    errDisplay.classList.add("error");
    errDisplay.appendChild(p_error);
    errDisplay.style.position = "absolute";
    errDisplay.style.top = "0em";
    errDisplay.style.right = "40";
    errDisplay.style.width = "20%";
    errDisplay.style.height = "4em";
    errDisplay.style.background = "#4942e4";
    errDisplay.style.display = "grid";
    errDisplay.style.placeItems = "center";
    errDisplay.style.transform = "translateY(-105%)";
    errDisplay.style.transition = "all ease 1s";
    // Set styles for errDisplay

    document.querySelector("body").appendChild(errDisplay);
    errorBox = errDisplay;
    // Now you can log the errorBox inside the load event listener
    console.log(errDisplay);
});

const formCheck = (inputsToCheck) => {
    let errorText;
    let password;
    let statusInput = true;
    inputsToCheck.forEach((item) => {
        item.addEventListener("input", () => {
            // name validation
            if (item.id == "name") {
                if (item.value.length < 5) {
                    statusInput = false;
                    validityDisplay(
                        item,
                        "Name should not be less than five characters!!"
                    );
                } else {
                    statusInput = true;
                    item.style.border = "4px solid green";
                }
            }
            //   username check
            else if (item.id == "u-name") {
                let numbers = ["1", "2", "3", "4", "5", "6", "7", "8", "9"];
                if (item.value.length < 5) {
                    statusInput = false;
                    validityDisplay(
                        item,
                        "Username should not be less than five!!"
                    );
                } else {
                    if (numbers.some((number) => item.value.includes(number))) {
                        statusInput = true;
                        item.style.border = "4px solid green";
                    } else {
                        statusInput = false;
                        validityDisplay(
                            item,
                            "Username should have atleast one number!!"
                        );
                    }
                }
            }
            //   email validation
            else if (item.id == "email") {
                function isValidEmail(email) {
                    if (
                        email.indexOf("@") === -1 ||
                        email.indexOf(".") === -1
                    ) {
                        return false;
                    }
                    if (email.indexOf("@") > email.indexOf(".")) {
                        return false;
                    }
                    if (email.indexOf("@") === 0) {
                        return false;
                    }
                    if (email.indexOf("@") + 1 === email.indexOf(".")) {
                        return false;
                    }
                    if (email.indexOf(".") === email.length - 1) {
                        return false;
                    }
                    if (email.includes(" ")) {
                        return false;
                    }
                    return true;
                }
                if (isValidEmail(item.value)) {
                    statusInput = true;
                    item.style.border = "4px solid green";
                } else {
                    statusInput = false;
                    validityDisplay(item, "PLease check you email format!!");
                }
            }
            //   password validation
            else if (item.id == "pass") {
                if (
                    /[a-z]/.test(item.value) &&
                    /[A-Z]/.test(item.value) &&
                    /[0-9]/.test(item.value)
                ) {
                    password = item.value;
                    statusInput = true;
                    item.style.border = "4px solid green";
                } else {
                    statusInput = false;
                    item.style.border = "4px solid red";
                    if (!/[a-z]/.test(item.value)) {
                        validityDisplay(item, "Password should have lowercase");
                    } else if (!/[A-Z]/.test(item.value)) {
                        validityDisplay(item, "Password should have uppercase");
                    } else if (item.value.length < 5) {
                        validityDisplay(
                            item,
                            "Password should have a length of atleast five characters"
                        );
                    } else if (!/[0-9]/.test(item.value)) {
                        validityDisplay(item, "Password must contain numbers!");
                    }
                    displayText(errorText);
                }
            }
            //   re-enter password validation
            else if (item.id == "re-pass") {
                if (password == item.value) {
                    statusInput = true;
                    item.style.border = "4px solid green";
                } else {
                    statusInput = false;
                    validityDisplay(item, "Your password does not match!!");
                }
            }
        });
    });

    function validityDisplay(element, text) {
        element.style.border = "4px solid red";
        errorText = text;
        displayText(text);
    }
    function displayText(text) {
        if (statusInput) {
            errorBox.querySelector("p").textContent = "";
            errorBox.style.transform = "translateY(-105%)";
        } else {
            errorBox.querySelector("p").textContent = text;
            errorBox.style.transform = "translateY(0)";

            setTimeout(() => {
                errorBox.querySelector("p").textContent = "";
                errorBox.style.transform = "translateY(-105%)";
            }, 5000);
        }
    }
};

formCheck(inputs);
