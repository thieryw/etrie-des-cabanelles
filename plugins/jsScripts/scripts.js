$(document) .ready(function() {
    $('.slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      arrows: true,
      
    });

    

});

$(document) .ready(function(){
    $('.imageSlider').slick({
      centerPadding: "0px",
      centerMode: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      focusOnSelect: true ,
      arrows: true
    });
});

