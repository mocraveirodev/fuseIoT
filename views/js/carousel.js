var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("solucao");
    var controles = document.getElementsByClassName("controle");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < controles.length; i++) {
        controles[i].className = controles[i].className.replace(" ativo", "");
    }
    slides[slideIndex-1].style.display = "block";  
    controles[slideIndex-1].className += " ativo";
    setTimeout(showSlides, 7000);
}