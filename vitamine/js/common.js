"use strict";

$(document).ready(function () {

  var hideEl = function(data) {
    $('.sl2').removeClass('_show');
    $('.main-m').addClass('hide');
  };

  var showEl = function(data) {
    $('.sl2').addClass('_show');
    $('.main-m').removeClass('hide');
  };

  var changeBGtoWhite = function() {
    $('.wrap .common-bg').removeClass('hide');
  };

  var changeBGtoGray = function() {
    $('.wrap .common-bg').addClass('hide');
  };

  var it1 = 768 / 100;
  var it2;
  var it4 = 1024 / 100;
  var newSize;

  var canClick = true;

  function ress() {
    if ($(window).height() > 768) {
      $('.over-wrap').height(768);
    } else {
      $('.over-wrap').height($(window).height());
    }

    it2 = Math.round($(window).height() / it1);

    if ( $(window).width() > $(window).height() ) {
      newSize = $(window).height() / 1000 + ( ( $(window).height() / 1000 ) / 100 * 29.9 );
      if ( newSize > 1 && $(window).width() < 1024 && $(window).height() < 768 ) {
        newSize = 0.95;
      }
      $('#page').attr('style', '').css({
        'transform': 'scale(' + newSize + ')'
      }).css({
        '-webkit-transform': 'scale(' + newSize + ')'
      });
      return;
    }

    if ($(window).height() < 768 || $(window).width() < 1024) {
      it2 = Math.round($(window).width() / it4);
      newSize = $(window).height() / 1000 + ( ( $(window).height() / 1000 ) / 100 * 29.9 );
      $('#page').attr('style', '').css({
        'transform': 'scale(' + (it2 - 1) / 100 + ')'
      }).css({
        '-webkit-transform': 'scale(' + (it2 - 1) / 100 + ')'
      });
    }

    if ($(window).width() > 1024) {
      it2 = Math.round($(window).width() / it4) > Math.round($(window).height() / it1) ? Math.round($(window).height() / it1) : Math.round($(window).width() / it4);
      $('#page').attr('style', '');
      $('#page').css({
        'transform': 'scale(' + it2 / 100 + ')'
      });
      $('#page').css({
        '-webkit-transform': 'scale(' + it2 / 100 + ')'
      });
      $('.over-wrap').height(768 * (it2 / 100));
    }
  }

  ress();
  $(window).resize(function () {
    ress();
  });
  $(window).load(function () {
    ress();
  });

  setTimeout(function() {
    $('.sl1 .like').addClass('ac');
  }, 500);

  $('.sl1 .like form input').click(function() {
    $(this).attr('disabled', 'disabled');
  });

  $('.sl2 .sl2-link1').click(function() {
    $('.sl2 .ovec').removeClass('ac');
    $('.sl2 .vec1').addClass('ac');
  });
  $('.sl2 .sl2-link2').click(function() {
    $('.sl2 .ovec').removeClass('ac');
    $('.sl2 .vec2').addClass('ac');
  });
  $('.sl2 .sl2-link3').click(function() {
    $('.sl2 .ovec').removeClass('ac');
    $('.sl2 .vec3').addClass('ac');
  });
  $('.sl2 .sl2-link4').click(function() {
    $('.sl2 .ovec').removeClass('ac');
    $('.sl2 .vec4').addClass('ac');
  });

  $('.sl2 .vec1 a').click(function() {
    $('.m_pop1').fadeIn();
    changeBGtoWhite();
  });
  $('.m_pop1 .x').click(function() {
    $(this).parent().fadeOut();
    changeBGtoGray();
  });

  $('.sl2 .vec2 a').click(function() {
    $('.m_pop2').fadeIn();
    setTimeout(function() {
      $('.m_pop2 .q3').addClass('ac');
      $('.m_pop2 .q4').addClass('ac');
    }, 500);
    setTimeout(function() {
      $('.m_pop2 .q5').addClass('ac');
      $('.m_pop2 .q6').addClass('ac');
    }, 1000);
    setTimeout(function() {
      $('.m_pop2 .q7').addClass('ac');
      $('.m_pop2 .q8').addClass('ac');
    }, 1500);
    hideEl();
  });
  $('.m_pop2 .x').click(function() {
    $(this).parent().fadeOut();
    $('.m_pop2 .q3').removeClass('ac');
    $('.m_pop2 .q4').removeClass('ac');
    $('.m_pop2 .q5').removeClass('ac');
    $('.m_pop2 .q6').removeClass('ac');
    $('.m_pop2 .q7').removeClass('ac');
    $('.m_pop2 .q8').removeClass('ac');
    showEl();
  });

  $('.sl2 .vec3 a').click(function() {
    $('.m_pop3').fadeIn();
    hideEl();
  });
  $('.m_pop3 .x').click(function() {
    $(this).parent().fadeOut();
    showEl();
  });

  $('.m_pop3 .o1').click(function() {
    $('.m_pop4').fadeIn();
    setTimeout(function() {
      $('.m_pop4 .tub1').addClass('ac');
    }, 500);
    setTimeout(function() {
      $('.m_pop4 .plsh1').addClass('ac');
    }, 1000);
    setTimeout(function() {
      $('.m_pop4 .plsh2').addClass('ac');
    }, 1500);
    setTimeout(function() {
      $('.m_pop4 .plsh3').addClass('ac');
    }, 2000);
    setTimeout(function() {
      $('.m_pop4 .plsh4').addClass('ac');
    }, 2500);
    setTimeout(function() {
      $('.m_pop4 .mlist').addClass('ac');
    }, 3000);
    changeBGtoWhite();
  });
  $('.m_pop4 .x').click(function() {
    $(this).parent().fadeOut();
    $('.m_pop4 .tub1').removeClass('ac');
    $('.m_pop4 .plsh1').removeClass('ac');
    $('.m_pop4 .plsh2').removeClass('ac');
    $('.m_pop4 .plsh3').removeClass('ac');
    $('.m_pop4 .plsh4').removeClass('ac');
    $('.m_pop4 .mlist').removeClass('ac');
    changeBGtoGray();
  });
  $('.m_pop3 .o2').click(function() {
    $('.m_pop5').fadeIn();
    setTimeout(function() {
      $('.m_pop5 .tub1').addClass('ac');
    }, 500);
    setTimeout(function() {
      $('.m_pop5 .plsh1').addClass('ac');
    }, 1000);
    setTimeout(function() {
      $('.m_pop5 .plsh2').addClass('ac');
    }, 1500);
    setTimeout(function() {
      $('.m_pop5 .plsh3').addClass('ac');
    }, 2000);
    setTimeout(function() {
      $('.m_pop5 .plsh4').addClass('ac');
    }, 2500);
    setTimeout(function() {
      $('.m_pop5 .mlist').addClass('ac');
    }, 3000);
    setTimeout(function() {
      $('.m_pop5 .e6').addClass('ac');
      $('.m_pop5 .e7').addClass('ac');
    }, 3500);
    changeBGtoWhite();
  });
  $('.m_pop5 .x').click(function() {
    $(this).parent().fadeOut();
    $('.m_pop5 .tub1').removeClass('ac');
    $('.m_pop5 .plsh1').removeClass('ac');
    $('.m_pop5 .plsh2').removeClass('ac');
    $('.m_pop5 .plsh3').removeClass('ac');
    $('.m_pop5 .plsh4').removeClass('ac');
    $('.m_pop5 .mlist').removeClass('ac');
    $('.m_pop5 .e6').removeClass('ac');
    $('.m_pop5 .e7').removeClass('ac');
    changeBGtoGray();
  });
  $('.m_pop3 .o3').click(function() {
    $('.m_pop6').fadeIn();
    setTimeout(function() {
      $('.m_pop6 .tub1').addClass('ac');
    }, 500);
    setTimeout(function() {
      $('.m_pop6 .plsh1').addClass('ac');
    }, 1000);
    setTimeout(function() {
      $('.m_pop6 .plsh2').addClass('ac');
    }, 1500);
    setTimeout(function() {
      $('.m_pop6 .plsh3').addClass('ac');
    }, 2000);
    setTimeout(function() {
      $('.m_pop6 .plsh4').addClass('ac');
    }, 2500);
    setTimeout(function() {
      $('.m_pop6 .plsh5').addClass('ac');
    }, 3000);
    setTimeout(function() {
      $('.m_pop6 .mlist').addClass('ac');
    }, 3500);
    changeBGtoWhite();
  });
  $('.m_pop6 .x').click(function() {
    $(this).parent().fadeOut();
    $('.m_pop6 .tub1').removeClass('ac');
    $('.m_pop6 .plsh1').removeClass('ac');
    $('.m_pop6 .plsh2').removeClass('ac');
    $('.m_pop6 .plsh3').removeClass('ac');
    $('.m_pop6 .plsh4').removeClass('ac');
    $('.m_pop6 .plsh5').removeClass('ac');
    $('.m_pop6 .mlist').removeClass('ac');
    changeBGtoGray();
  });
  $('.m_pop3 .o4').click(function() {
    $('.m_pop7').fadeIn();
    setTimeout(function() {
      $('.m_pop7 .tub1').addClass('ac');
    }, 500);
    setTimeout(function() {
      $('.m_pop7 .plsh1').addClass('ac');
    }, 1000);
    setTimeout(function() {
      $('.m_pop7 .plsh2').addClass('ac');
    }, 1500);
    setTimeout(function() {
      $('.m_pop7 .plsh3').addClass('ac');
    }, 2000);
    setTimeout(function() {
      $('.m_pop7 .mlist').addClass('ac');
    }, 2500);
    setTimeout(function() {
      $('.m_pop7 .e6').addClass('ac');
      $('.m_pop7 .e7').addClass('ac');
    }, 3000);
    changeBGtoWhite();
  });
  $('.m_pop7 .x').click(function() {
    $(this).parent().fadeOut();
    $('.m_pop7 .tub1').removeClass('ac');
    $('.m_pop7 .plsh1').removeClass('ac');
    $('.m_pop7 .plsh2').removeClass('ac');
    $('.m_pop7 .plsh3').removeClass('ac');
    $('.m_pop7 .mlist').removeClass('ac');
    $('.m_pop7 .e6').removeClass('ac');
    $('.m_pop7 .e7').removeClass('ac');
    changeBGtoGray();
  });

  // $('.sl2 .vec4 a').click(function() {
  //   $('.m_pop8').fadeIn();
  //   changeBGtoWhite();
  // });

  $('.main-m .prev-move').click(function(e) {
    // if ( $('.sl2').hasClass('_show') ) e.preventDefault();
    // $('.sl._show').removeClass('_show').prev().addClass('_show');
    // $('.main-m .next-move').removeClass('hide');
    // $('.sl2 .sl2-links').removeClass('ac');
    // $('.sl2 .ovec').removeClass('ac');

    if ( $('.sl2').hasClass('_show') ) e.preventDefault();
    if (!canClick) return;
    canClick = !canClick;
    $('.main-m .next-move').removeClass('hide');
    $('.sl._show').removeClass('_show').prev().addClass('_show');
    $('.sl1 .drop').removeClass('hide');
    $('.sl2 .sl2-links').removeClass('ac');
    $('.sl2 .ovec').removeClass('ac');
    setTimeout(function() {
      canClick = !canClick;
    }, 1000);
  });
  $('.main-m .next-move').click(function() {
    // $('.sl._show').removeClass('_show').next().addClass('_show');
    // $(this).addClass('hide');
    // setTimeout(function() {
    //   $('.sl2 .sl2-link1').addClass('ac');
    // }, 500);
    // setTimeout(function() {
    //   $('.sl2 .sl2-link2').addClass('ac');
    // }, 750);
    // setTimeout(function() {
    //   $('.sl2 .sl2-link3').addClass('ac');
    // }, 1000);
    // setTimeout(function() {
    //   $('.sl2 .sl2-link4').addClass('ac');
    // }, 1250);

    if (!canClick) return;
    canClick = !canClick;
    $(this).addClass('hide');
    $('.sl1 .drop').addClass('hide');
    setTimeout(function() {
      $('.sl._show').removeClass('_show').next().addClass('_show');
      setTimeout(function() {
        $('.sl2 .sl2-link1').addClass('ac');
      }, 500);
      setTimeout(function() {
        $('.sl2 .sl2-link2').addClass('ac');
      }, 750);
      setTimeout(function() {
        $('.sl2 .sl2-link3').addClass('ac');
      }, 1000);
      setTimeout(function() {
        $('.sl2 .sl2-link4').addClass('ac');
      }, 1250);
      setTimeout(function() {
        canClick = !canClick;
      }, 1500);
    }, 1250);
  });

});