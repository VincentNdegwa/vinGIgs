let view = false;
let viewCont = document.querySelector(".edit-display-hide");

function display(id) {
    if (viewCont.classList.contains("edit-display")) {
        viewCont.classList.remove("edit-display");
        viewCont.classList.add("edit-display-hide");
    } else {
        
        console.log(id);
        fetch(`/list/get/${id}`, {
        }).then((res)=>console.log(res)).catch((err)=>console.log(err+ "Cannot get data"))
        viewCont.classList.remove("edit-display-hide");
        viewCont.classList.add("edit-display");
    }
}

function closeDisplay() {
    viewCont.classList.remove("edit-display");
    viewCont.classList.add("edit-display-hide");
}
