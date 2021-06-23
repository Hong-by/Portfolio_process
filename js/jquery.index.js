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
  $(".each-btns a").eq(0).trigger("click");
  $(".each-btns").click(function(e){
    e.preventDefault();
  });

  const wHeight = $(window).height();
  const wWidth = $(window).width();

  if(wHeight > 720 && wWidth > 450){
    $(".wrapper").css('height', '100vh');
  } else {
    $(".wrapper").css('height', '100%');
  }

  if(wWidth > 450){
    $(".wrapper").css('height', '100vh');
  }

  $(window).resize(function(){
    const wHeight = $(window).height();
    const wWidth = $(window).width();

    if(wHeight > 720 && wWidth > 450){
      $(".wrapper").css('height', '100vh');
    } else {
      $(".wrapper").css('height', '100%');
    }

    if(wWidth > 768){
      $(".wrapper").css('height', '100vh');
    } else {
    $(".wrapper").css('height', '100%');
    }
  });
  
});