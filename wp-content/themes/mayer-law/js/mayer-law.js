var currentUrl = window.location.pathname;
$(document).ready(function() {
	centerLogo();
	centerGradient();
	$('img[title]').each(function() { $(this).removeAttr('title'); });
	if(currentUrl == '/services/') {
		$('blockquote').remove();
	}
	setInputFieldFunctions();
	hoverZoom();
	footerHeight();	
	
});

$(window).resize(function() {
	centerLogo();
	centerGradient();
	footerHeight();
	
});

$(window).load(function() {
	footerHeight();
});

function centerLogo(){  
  windowWidth = $(window).width();
  var w = 960 - 116;
  $('#mayer-logo').css({'left': w/2});   

}

function centerGradient(){  
  windowWidth = $(window).width();
  var w = windowWidth - 925;
  $('#gradient').css({'left': w/2});   

}

function setInputFieldFunctions(){
$('.form-input').each(function(){
     if($(this).val() == "")
       $(this).val($(this).attr('default'));
   })

   $('.form-input').focus(function(){
     if($(this).val() == $(this).attr('default') || $(this).val() == '')
       $(this).val('');

   }).blur(function() {
     if($(this).val() == $(this).attr('default') || $(this).val() == '')
       $(this).val($(this).attr('default'));
   });
}


function hoverZoom() {
	$('.learn-more-cont').mouseenter(function(e) {
        $(this).children('.learn-more').animate({ height: '32.5', width: '142.5', paddingTop: '16.75'}, 100);
    }).mouseleave(function(e) {
        $(this).children('.learn-more').animate({ height: '30', width: '140', paddingTop: '15'}, 100);
    });

}

function footerHeight(){
var footer = $('#colophon'),
windowHeight = $(window).height(),
combinedHeight = footer.offset().top + 150,
height = (windowHeight > combinedHeight) ? windowHeight - footer.offset().top : 150;
// height = windowHeight - footer.offset().top;

footer.css({'height':height});
}



