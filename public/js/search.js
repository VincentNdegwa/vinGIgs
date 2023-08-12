const searchForm = document.querySelector(".search_form");
const searchInput = searchForm.querySelector("input");

searchInput.addEventListener("keydown", (event) => {
    if (event.key === "Enter") {
        event.preventDefault();
        searchForm.submit();
    }
});

const searchIcon = searchForm.querySelector(".bx");
searchIcon.addEventListener("click", (event) => {
    event.preventDefault();
    searchForm.submit();
});
