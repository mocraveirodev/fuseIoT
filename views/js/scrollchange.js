var logo = document.querySelector('.logofuse').offsetTop;
var navbar = document.querySelector('.navbar');

function scrollChange() {
    if(window.scrollY > logo){
        navbar.classList.add('navbarChange');
    }else{
        navbar.classList.remove('navbarChange');
    }
};