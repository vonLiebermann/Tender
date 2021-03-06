"use strict";

$(window).load(function () {

 var hideEl = function() {
    $('.sl5').removeClass('_show');
    $('.main-m .next-move').addClass('hide');
    $('.main-m .prev-move').addClass('hide');
    $('.x').css('z-index', 3);
  };
  var showEl = function() {
    $('.sl5').addClass('_show');
    $('.main-m .next-move').removeClass('hide');
    $('.main-m .prev-move').removeClass('hide');
  };

  var changeToWhite = function() {
    $('.wrap .bg1').removeClass('hide');
  };
  var changeToBlue = function() {
    $('.wrap .bg1').addClass('hide');
  };

  var it1 = 768 / 100;
  var it2;
  var it4 = 1024 / 100;
  var newSize;

  function ress() {
      var aaaa = window.innerHeight;
      var bbbb = window.innerWidth;
    if ($(window).height() > 768) {
      $('.over-wrap').height(768);
    } else {
      $('.over-wrap').height($(window).height());
    }

    it2 = Math.round($(window).height() / it1);

    if ( aaaa < bbbb) {
        
        var wwh = bbbb/aaaa;
        if (wwh>1.8){
            
            var it2 = Math.round(aaaa / it1);
            $('#page').attr('style', '').css({
        'transform': 'scale(' + (it2 - 1) / 100 + ')'
      }).css({
        '-webkit-transform': 'scale(' + (it2 - 1) / 100 + ')'
      });
            
        }else{
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
    }

    if ($(window).height() < 768 || $(window).width() < 1024) {
        var wh = window.innerHeight;
        
        var ww = window.innerWidth;
        var wwh = ww/wh;
        if (wwh>1.8){
            it2 = Math.round(wh / it1);
            $('#page').attr('style', '').css({
        'transform': 'scale(' + (it2 - 1) / 100 + ')'
      }).css({
        '-webkit-transform': 'scale(' + (it2 - 1) / 100 + ')'
      });
            
        }else{
      it2 = Math.round($(window).width() / it4);
      newSize = $(window).height() / 1000 + ( ( $(window).height() / 1000 ) / 100 * 29.9 );
      $('#page').attr('style', '').css({
        'transform': 'scale(' + (it2 - 1) / 100 + ')'
      }).css({
        '-webkit-transform': 'scale(' + (it2 - 1) / 100 + ')'
      });
    }
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
    setTimeout(ress, 100);

  });
  $(window).load(function () {
    setTimeout(ress, 100);
  });
$(document).ready(function () {
    setTimeout(ress, 100);
  });

  setTimeout(function() {
    $('.sl2 h3').addClass('ac');
  }, 500);
  setTimeout(function() {
    $('.sl2 h4').addClass('ac');
    $('.sl2 .list').addClass('ac');
  }, 1000);
  setTimeout(function() {
    $('.sl2 .line li').eq(0).addClass('ac');
  }, 1500);
  setTimeout(function() {
    $('.sl2 .line li').eq(1).addClass('ac');
  }, 2000);
  setTimeout(function() {
    $('.sl2 .line li').eq(2).addClass('ac');
  }, 2500);

  $('.main-m .next-move').click(function() {
    hideEl();
    changeToWhite();
    $('.mp2').fadeIn();
    setTimeout(function() {
      $('.mp2 .gg .g3').addClass('ac');
    }, 500);
    setTimeout(function() {
      $('.mp2 .gg .g2').addClass('ac');
    }, 200);
  });

  $('.mp2 .x').click(function() {
    showEl();
    changeToBlue();
    $('.mp2').fadeOut();
    $('.mp2 .gg .g3').removeClass('ac');
    $('.mp2 .gg .g2').removeClass('ac');
  });

});