
var sliderIndex = null;
var sliderLength = 101;
var imageContainer = document.getElementsByClassName("imageContainer");



function openModal(){

    var slides = document.getElementById("modal");

    slides.setAttribute("style", "display: block");

    

}

function fadeIn(element){

    var opacity = 0.4;

    var timer = setInterval(function(){

        if(opacity >= 1){

            clearInterval(timer);

        }

        element.style.opacity = opacity;
        opacity += 0.01;

    })

}

function adjustImgSize(imgIndex, slide){


    var currentImg = document.querySelector("#img" + imgIndex);


    if(currentImg.clientWidth > 1826){

        slide.style.height = "400px";
        slide.style.marginTop = "-200px";
        slide.style.maxWidth = "1400px";

        return;

    }

    

    if(currentImg.clientWidth < 734){

        slide.style.height = "800px";
        slide.style.marginTop = "-400px";

        return;

    }

    

}

function normalizeImgDimentions(slide){
    slide.style.height = null;
    slide.style.marginTop = null;
}



function showSlides(slideIndex){

    imageContainer[slideIndex - 1].style.display = "block";

    adjustImgSize(slideIndex, imageContainer[slideIndex - 1]);

    fadeIn(imageContainer[slideIndex - 1]);
    

    sliderIndex = slideIndex - 1;

}

function hideSlides(){

    //to do
    imageContainer[sliderIndex].setAttribute("style", "display: none; opacity: 0");

    normalizeImgDimentions(imageContainer[sliderIndex]);

}


function nextSlide(){


    hideSlides();

    if(sliderIndex === sliderLength - 1){
        showSlides(1);
        return;
    }


    showSlides(sliderIndex + 2);

    


}

function prevSlide(){

    hideSlides();

    if(sliderIndex === 0){
        showSlides(sliderLength);
        return;
    }

    showSlides(sliderIndex);
}
    

function quitSlider(){

    document.getElementById("modal").style.display="none";

    normalizeImgDimentions(imageContainer[sliderIndex]);

    imageContainer[sliderIndex].style.display="none";



    sliderIndex = null;

}

document.onkeydown = function(e){

    if(sliderIndex == null){
        return;
    }

    e.keyCode === 37 ? prevSlide() : 
    (e.keyCode === 39 ? nextSlide() : quitSlider());


}