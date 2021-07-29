$(document).ready(function () {
  // activate navigation
  var activateNav = function () {
    $(".gnb li").click(function () {
      var liWidth = $(this).width();
      var liLeft = $(this).position().left;
      var liIndex = $(this).index();
      var pagePos = $("section").eq(liIndex).offset().top;
      var winWidth = $(window).width();

      if (winWidth < 700) {
        $(".gnb").animate({ right: '-100%' }, 300);
        $(".menuBtn").removeClass("on");
      }

      //$(".gnb li").removeClass("active");
      $(this).addClass("active");

      $(this).siblings("span").width(liWidth);
      $(".gnb span").animate({ left: liLeft }, 200);

      $("html,body").animate({ scrollTop: pagePos }, 300);
    });

    $(".gnb li").eq(0).trigger("click");
  }

  activateNav();

  //header activate when scorll down and up
  var activateHeader = function () {
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();

      for (var i = 0; i < $("section").length; i++) {
        var secTop = $("section").eq(i).offset().top;
        var secBtm = secTop + $("section").eq(i).outerHeight();
        var liWidth = $(".gnb li").eq(i).outerWidth();
        var liLeft = $(".gnb li").eq(i).position().left;
        var winHeight = $(window).height();
        var scrollBtm = $(".wrap").height() - winHeight - 1;

        if (scroll >= secTop - 1 && scroll < secBtm - 1) {
          $(".gnb li").eq(i).addClass("active");
          $(".gnb").find("span").width(liWidth);
          $(".gnb").find("span").stop().animate({ left: liLeft }, 200);
        } else {
          $(".gnb li").eq(i).removeClass("active");
        }

        if (scroll >= scrollBtm) {
          $(".gnb li").eq(3).removeClass("active");
          $(".gnb li.last").addClass("active");
          $(".gnb").find("span").width($(".last").outerWidth());
          $(".gnb").find("span").stop().animate({ left: $(".last").position().left }, 200);
        }

        if (scroll >= secTop) {
          if (i % 2 == 0) {
            $("header").removeClass("on");
            $(".menuBtn>div").css("background", "#fff");
            $("header img").attr("src", "images/logo.png");
          } else {
            $("header").addClass("on");
            $(".menuBtn>div").css("background", "#101010");
            $("header img").attr("src", "images/logo_black.png");
          }
        }
      }
    });
  }

  activateHeader();

  // header position change when scrolling down
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > 0) {
      $("header").css("position", "fixed");
    } else {
      $("header").css("position", "relative");
    }
  });
});