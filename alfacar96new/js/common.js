$(function(){
	$('#start-vid .overlay .box').css('width', $('#start-vid .overlay .box h4').width()+'px');
	$('#start-vid .overlay .box').css('margin-top', $('#start-vid .overlay2').height()+'px');
});

$(function(){
	if ($(window).width() < 640) {
		$('nav p').css('display','block');
		$('#start-vid').css('display', 'none')
	} else {
		$('nav p').css('display','none');
		$('#start-vid').css('display', 'block');
		var height = $('#services_page_services .price .col-xl-4 #max').height()+'px';
		$('#services_page_services .price .col-xl-4 .row').height(height);
		var height = $('#services_page_services .twocol .col-xl-6 #max').height()+'px';
		$('#services_page_services .twocol .col-xl-6 > .h').height(height);
		var height = $('#services_page_services .price .maxbtn').height()+'px';
		$('#services_page_services .price .col-xl-4 > button').height(height);
	}
		
});

$(function(){
  if ($(window).width() > 639 && $(window).width() < 1025) {
    $('#navbarSupportedContent').addClass("show");
	$('.navbar-toggler').addClass("d-none");
	
  } else {
    $('#navbarSupportedContent').removeClass("show");
    $('.navbar-toggler').removeClass("d-none");
  }
});

$(window).scroll(function () {
	if ($(this).scrollTop() > 100) {
		if ($(window).width() < 640) {
			$('nav').addClass("fixed-top");
			$('nav').css('background-color','#000000f5')
		}
	} else {
		$('nav').removeClass("fixed-top");
		$('nav').css('background-color','#0000009f')
	}
});


$(function(){
	$('#start-vid a').on('click', function(e){
	  $('html,body').stop().animate({ scrollTop: $('#header').offset().top }, 1000);
	  e.preventDefault();
	  setTimeout(function(){ $('#start-vid').css('display', 'none') },2000);
	});

	$('header #feedback a').on('click', function(e){
	  $('html,body').stop().animate({ scrollTop: $('#flamp').offset().top }, 2000);
	  e.preventDefault();
	});	
});

$('#myModal').on('shown.bs.modal', function () {
	$('#myInput').trigger('focus')
})

$(function(){
    $(".js-smartPhoto").SmartPhoto();
});

$(function() {
	
	var target_block = $(".numbers .u100");
	var blockStatus = true;
	
	$(window).scroll(function() {
	
		var scrollEvent = ($(window).scrollTop() > (target_block.offset().top - $(window).height() + 100));
		
		if(scrollEvent && blockStatus) {
			$('.u100').each(function () {
				$(this).prop('Counter',0).animate({
					 Counter: $(this).text()
				 }, {
					 duration: 3000,
					 easing: 'swing',
					 step: function (now) {
						 $(this).text(Math.ceil(now));
					 }
				 });
			 });

			setTimeout(blockStatus = false, 3000);
			 
		}
		
	});
	
});



 

$("#autotype").change(function () {
	var value = $("#autotype :selected").val();

	if (value == 1) {
		$(".td1").css({'display':'table-cell'})
		$(".td2").css({'display':'none'})
		$(".td3").css({'display':'none'})
	}
	if (value == 2) {
		$(".td1").css({'display':'none'})
		$(".td2").css({'display':'table-cell'})
		$(".td3").css({'display':'none'})
	}
	if (value == 3) {
		$(".td1").css({'display':'none'})
		$(".td2").css({'display':'none'})
		$(".td3").css({'display':'table-cell'})
	}
});

$(document).ready(function(){
    $('input').on('blur', function(){
        $('[name=check]').val("codeword");
    });
});