let view = false;
let viewCont = document.querySelector(".edit-display");
function display() {
    console.log("clicked!!!!");
    // if (viewCont.classList.contains("edit-display")) {
    //     viewCont.classList.remove("edit-display");
    //     viewCont.classList.add("edit-display-hide");
    // } else {

    //     console.log(id);
    //     fetch(`/list/get/${id}`, {
    //     }).then((res)=>console.log(res)).catch((err)=>console.log(err+ "Cannot get data"))
    //     viewCont.classList.remove("edit-display-hide");
    //     viewCont.classList.add("edit-display");
    // }
}

function closeDisplay() {
    if (viewCont.classList.contains("edit-display")) {
        viewCont.classList.remove("edit-display");
        viewCont.classList.add("edit-display-hide");
        window.location = "/create";
    } else {
        viewCont.classList.remove("edit-display-hide");
        viewCont.classList.add("edit-display");
    }
}
