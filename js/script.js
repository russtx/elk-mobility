
(function ($, root, undefined) {
	$(function () {
		'use strict';
		// DOM ready, take it away
		$('#scrollDown').on('click', function(e){
			     e.preventDefault();
			     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			       var target = $(this.hash);
			       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			       if (target.length) {
			         $('html,body').animate({
			           scrollTop: target.offset().top
			         }, 1000);
			         return false;
			       }
			     }
			   });
				 //next
							 $('.video').parent().click(function () {
			    if($(this).children(".video").get(0).paused){
			        $(this).children(".video").get(0).play();
			        $(this).children(".playpause").fadeOut();
			    }else{
			       $(this).children(".video").get(0).pause();
			        $(this).children(".playpause").fadeIn();
			    }
			});

//next




//end here
	});
})(jQuery, this);
