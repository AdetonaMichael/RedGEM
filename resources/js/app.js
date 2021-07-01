require('./bootstrap');
// grabing everything that we need
const btn= document.querySelector('button.mobile-menu-button');
const  menu = document.querySelector('.mobile-menu');

// add event listener
btn.addEventListener("click", () =>{
    menu.classList.toggle("hidden");
});