// Controls the mobile nav
let hambergur = document.getElementsByClassName('hamburger-wrap')[0];  
let mb_nav = document.getElementById('mb-nav-container'); 
let navLinks = document.querySelector('.nav-links');

hambergur.addEventListener("click", function(){ 
    console.log("Button pressed");
    navLinks.classList.toggle('nav-active');
}) 


