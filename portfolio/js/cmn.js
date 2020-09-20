// ＝＝＝＝＝＝＝＝＝＝＝＝リンククリックしたらそこまでスクロール＝＝＝＝＝＝＝＝

$(function () {
  // #で始まるリンクをクリックしたら実行されます
  $('a[href^="#"]').click(function () {
    // スクロールの速度
    var speed = 500; // ミリ秒で記述
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $('body,html').animate({
      scrollTop: position
    }, speed, 'swing');
    return false;
  });
});




// -----------------------------------------------------------------------
$(function () {
  var topBtn = $('.return');

  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 500);
    return false;
  });
});

$(function () {
  $("#slider").slick({
    autoplay: true,
    autoplaySpeed: 2500,
    speed: 2000,
    dots: false,
    fade: true,
    infinite: true,
    swipe: false,
    arrows: false
  });
});

//   ーーーsーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
//   ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
$(function () {
  $(".sp_menu, .sp_gnav_list a,.close").click(function () {
    if (!$(".sp_gnav").hasClass("open")) {
      $(".sp_gnav").addClass("open");
      $(".shdow").fadeIn("slow");
    } else {
      $("html").css({
        "overflow-y": "visible"
      });
      $(".sp_gnav").removeClass("open")
      $(".shdow").fadeOut("slow");
    }
  });
});



$(function () {
  $(".sp_menu,.sp_gnav_list a").click(function () {
    if (!$(".sp_menu span").hasClass("menu_btn")) {
      $(".sp_menu span").addClass("menu_btn");
    } else {
      $(".sp_menu span").removeClass("menu_btn")
    }
  });
});

$(function () {
  $('.nav_concepy').each(function () {
    $(this).on('click', function () {
      $("+.nav_concepy_inner", this).slideToggle();
      return false;
    });
  });
});

$(function () {
  $('.dt1').on('click', function () {
    $('.dd1').slideToggle();
  });
  $('.dt2').on('click', function () {
    $('.dd2').slideToggle();
  });
  $('.dt3').on('click', function () {
    $('.dd3').slideToggle();
  });
  $('.dt4').on('click', function () {
    $('.dd4').slideToggle();
  });
  $('.dt5').on('click', function () {
    $('.dd5').slideToggle();
  });
});
