"use strict";

$(window).load(function () {

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
    $('.sl1 .o1, .sl1 .back').addClass('ac');
    setTimeout(function() {
      $('.sl1 .q1').addClass('ac');
    }, 500);
    setTimeout(function() {
      $('.sl1 .q2').addClass('ac');
    }, 600);
    setTimeout(function() {
      $('.sl1 .q3').addClass('ac');
    }, 700);
    setTimeout(function() {
      $('.sl1 .q4').addClass('ac');
    }, 800);
    setTimeout(function() {
      $('.sl1 .camera').addClass('ac');
    }, 1200);
    setTimeout(function() {
      $('.sl1 .submitbtn').addClass('ac');
    }, 1500);
    
    
    setTimeout(function() {
      $('.sl1 .step1').addClass('ac');
    }, 200);
    setTimeout(function() {
      $('.sl1 .step2').addClass('ac');
    }, 600);
    setTimeout(function() {
      $('.sl1 .step3').addClass('ac');
    }, 1000);
    setTimeout(function() {
      $('.sl1 .step4').addClass('ac');
    }, 1400);
    setTimeout(function() {
      $('.sl1 .choose').addClass('ac');
    }, 1500);


  }, 500);

  $('.q1').click(function () {
    $('.sl1').removeClass('sq2')
    $('.sl1').removeClass('sq3')
    $('.sl1').removeClass('sq4')
    $('.sl1').addClass('sq1')
    $('.wrap').removeClass('sq2')
    $('.wrap').removeClass('sq3')
    $('.wrap').removeClass('sq4')
    $('.wrap').addClass('sq1')
    $('.q2').removeClass('sel')
    $('.q3').removeClass('sel')
    $('.q4').removeClass('sel')
    $('.q1').addClass('sel')
  })

  $('.q2').click(function () {
    $('.sl1').removeClass('sq1')
    $('.sl1').removeClass('sq3')
    $('.sl1').removeClass('sq4')
    $('.sl1').addClass('sq2')
    $('.wrap').removeClass('sq1')
    $('.wrap').removeClass('sq3')
    $('.wrap').removeClass('sq4')
    $('.wrap').addClass('sq2')
    $('.q1').removeClass('sel')
    $('.q3').removeClass('sel')
    $('.q4').removeClass('sel')
    $('.q2').addClass('sel')
  })

  $('.q3').click(function () {
    $('.sl1').removeClass('sq1')
    $('.sl1').removeClass('sq2')
    $('.sl1').removeClass('sq4')
    $('.sl1').addClass('sq3')
    $('.wrap').removeClass('sq1')
    $('.wrap').removeClass('sq2')
    $('.wrap').removeClass('sq4')
    $('.wrap').addClass('sq3')
    $('.q1').removeClass('sel')
    $('.q2').removeClass('sel')
    $('.q4').removeClass('sel')
    $('.q3').addClass('sel')
  })

  $('.q4').click(function () {
    $('.sl1').removeClass('sq1')
    $('.sl1').removeClass('sq3')
    $('.sl1').removeClass('sq2')
    $('.sl1').addClass('sq4')
    $('.wrap').removeClass('sq1')
    $('.wrap').removeClass('sq3')
    $('.wrap').removeClass('sq2')
    $('.wrap').addClass('sq4')
    $('.q2').removeClass('sel')
    $('.q3').removeClass('sel')
    $('.q1').removeClass('sel')
    $('.q4').addClass('sel')
  })
  
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#uploaded_photo').attr('src', e.target.result);
      }
      
      reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
  }

  $('#download').click(function() {
    $('.modal1').removeClass('ac')
    $('.modal2').addClass('ac')
    $('.modal3').removeClass('ac')
  })

  $('.dislike').click(function() {
    $('.modal1').removeClass('ac')
    $('.modal2').removeClass('ac')
    $('.modal3').addClass('ac')
  })

  $('#image').change(function(event) {
    var name = event.target.value.split(/(\\|\/)/g).pop()
    if (name && name.length) {
      $('#filename').text(name)
      readURL(this);
    } else {
      $('#filename').text('Файл не выбран')
    }
  })

  $('#upload_cabin').submit(function(e) {
    e.preventDefault();
    
	//var form_data = $(this).serialize(); //собераем все данные из формы  
	
    $('.modal1').addClass('ac')
    $('#upload_cabin').fadeOut()
    //$.ajax({
	//	url: 'https://demo.lorealcongress.ru/php/upload.php',
    //  	method: 'post',
	//	data: form_data,
    //  	dataType: 'json',
	//	success: function(data) {
    //    	alert(data.up);
    //  	},
	//	error: function() { 
    //    	alert("Error12345");
    //	}       
    //})
    var fd = new FormData(jQuery('#upload_cabin').get(0));
    fd.append('submit',1);
    fd.append('return_name',1);
    jQuery.ajax({
        url: 'https://demo.lorealcongress.ru/php/upload.php',
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST'
    }).done(function(d){
        try{
        if(d && d.name){
            jQuery('.modal1 .result-text').html(['<img src="https://demo.lorealcongress.ru/php/download.php?img=',d.name,'"/>'].join(''));
        }
        }catch(e){
            
        }
    });
  })

});