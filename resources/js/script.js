const searchBtn = document.querySelector(".searchBtn");
const cancelBtn = document.querySelector(".cancelBtn");
const searchBox = document.querySelector(".searchBox");
const searchInput = document.querySelector("#searchInput");

searchBtn.onclick = () => {
    if(searchBox.classList.contains("active")){
        event.preventDefault();
        document.querySelector('#form-search').submit();
    }
    searchBox.classList.add("active");
    searchInput.classList.add("active");
    searchBtn.classList.add("active");
    cancelBtn.classList.add("active");
}

cancelBtn.onclick = () => {
    searchBox.classList.remove("active");
    searchInput.classList.remove("active");
    searchBtn.classList.remove("active");
    cancelBtn.classList.remove("active");
}