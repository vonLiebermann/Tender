"use strict";

$(window).load(function () {

  var hideEl = function() {
    $('.sl3').removeClass('_show');
    $('.main-m').addClass('hide');
  };
  var showEl = function() {
    $('.sl3').addClass('_show');
    $('.main-m').removeClass('hide');
  };

  var it1 = 768 / 100;
  var it2;
  var it4 = 1024 / 100;
  var newSize;

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
    $('.sl3 h3').addClass('ac');
  }, 500);
  setTimeout(function() {
    $('.sl3 h4').addClass('ac');
    $('.sl3 .list').addClass('ac');
  }, 1000);
  setTimeout(function() {
    $('.sl3 .line li').eq(0).addClass('ac');
  }, 1500);
  setTimeout(function() {
    $('.sl3 .line li').eq(1).addClass('ac');
  }, 2000);
  setTimeout(function() {
    $('.sl3 .line li').eq(2).addClass('ac');
  }, 2500);

  $('.main-m .next-move').click(function() {
    hideEl();
    $('.mp3').fadeIn();
    setTimeout(function() {
      $('.mp3 .gg .g3').addClass('ac');
    }, 500);
  });

  $('.mp3 .x').click(function() {
    showEl();
    $('.mp3').fadeOut();
    $('.mp3 .gg .g3').removeClass('ac');
  });

});