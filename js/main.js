const ham = document.querySelector(".ham");
const enlaces = document.querySelector(".menu");
const menu = document.querySelector(".list");
const contc = document.querySelector(".ancla4");

ham.addEventListener('click', () =>{
    enlaces.classList.toggle('move');
    menu.classList.toggle('op');
})

