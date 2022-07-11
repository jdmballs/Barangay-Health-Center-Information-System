const hamburger = document.querySelector(".hamburger");
const navmenu = document.querySelector(".nav-menu");
const exit = document.querySelector("exit");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navmenu.classList.toggle("active");
    var element = document.getElementById("main-nav"); 
    element.style.backgroundColor = "#0779bc";
})


document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click",() =>{
    hamburger.classList.remove("active");
    navmenu.classList.remove("active");   
}))


document.getElementById("callambulance_emergency").addEventListener('click', () => {
    document.querySelector('.bchis-modal').style.display = "flex";
})

document.getElementById("close").addEventListener('click', () => {
    document.querySelector('.bchis-modal').style.display = "none";
})

document.getElementById("emergency-button").addEventListener('click', () => {
    document.querySelector('.bchis-modal').style.display = "flex";
})

document.getElementById("close").addEventListener('click', () => {
    document.querySelector('.bchis-modal').style.display = "none";
})