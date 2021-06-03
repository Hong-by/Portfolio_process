$(document).ready(function() {
  //Lightslider Plugin Code
  $(".intro").lightSlider({
    item:1,
    pager:false,
    loop:true,
    slideMargin: 0,
    speed: 400,
    auto:true,
    pause: 7000,
    mode:'fade',
    adaptiveHeight:true,
  }); 
});