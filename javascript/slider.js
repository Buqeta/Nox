var slideIndex = 0;

showSlides(slideIndex);

function test(n){
    console.log(n);
}

function plusSlides(n){
    showSlides(slideIndex+=n);
    console.log(n);
}

function minusSlides(n){
    showSlides(slideIndex-=n);
    console.log(n);
}

function currentSlide(n){
    showSlides(slideIndex=n);
    console.log(slideIndex);
}

function showSlides(n){
    var i;
    var slides = document.getElementsByClassName("slides");
    var dots = document.getElementsByClassName("dot");
    console.log(slides[3]);
    if(n > slides.length - 1){
        slideIndex = 0;
    }

    if(n < 0){
        slideIndex = slides.length - 1;
    }

    for(i = 0; i < slides.length; i++){
        slides[i].style.display = "none";
    }

    for(i = 0; i < dots.length; i++){
        dots[i].className = dots[i].className.replace("active", "");
        console.log("pikat");
    }

    slides[slideIndex].style.display = "flex";
    dots[slideIndex].className += " active";
}