	//  Count Up
	function counter() {
		var oTop;
		if ($('.count').length !== 0) {
			oTop = $('.count').offset().top - window.innerHeight;
		}
		if ($(window).scrollTop() > oTop) {
			$('.count').each(function () {
				var $this = $(this),
					countTo = $this.attr('data-count');
				$({
					countNum: $this.text()
				}).animate({
					countNum: countTo
				}, {
					duration: 1000,
					easing: 'swing',
					step: function () {
						$this.text(Math.floor(this.countNum));
					},
					complete: function () {
						$this.text(this.countNum);
					}
				});
			});
		}
	}
	$(window).on('scroll', function () {
		counter();
	});

// Sticky Menu
// $(window).scroll(function () {
        //     var height = $('.top-header').innerHeight();
        //     if ($('header').offset().top > 10) {
        //         $('.header').removeClass('fixed-top');
        //         $('.top-header').addClass('hide');
        //         $('.navigation').addClass('nav-bg');
        //         $('.navigation').css('margin-top', '-' + height + 'px');
        //     } else {
        //         $('.header').addClass('fixed-top');
        //         $('.top-header').removeClass('hide');
        //         $('.navigation').removeClass('nav-bg');
        //         $('.navigation').css('margin-top', '-' + 0 + 'px');
        //     }
        // });


// var btn = $('#btopbutton');

// $(window).scroll(function() {
//   if ($(window).scrollTop() > 300) {
//     btn.addClass('show');
//   } else {
//     btn.removeClass('show');
//   }
// });

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});



jQuery.fn.liScroll = function(settings) {
    settings = jQuery.extend({
		travelocity: 0.03
		}, settings);	
		
		return this.each(function(){
		var $strip = jQuery(this);
		$strip.addClass("newsticker")
		var stripHeight = 1;
		$strip.find("li").each(function(i){
			stripHeight += jQuery(this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
		});
		
		var $mask = $strip.wrap("<div class='mask'></div>");
		var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");								
		var containerHeight = $strip.parent().parent().height();	//a.k.a. 'mask' width 	
		$strip.height(stripHeight);			
		var totalTravel = stripHeight;
		var defTiming = totalTravel/settings.travelocity;	// thanks to Scott Waye		
		function scrollnews(spazio, tempo){
		$strip.animate({top: '-='+ spazio}, tempo, "linear", function(){$strip.css("top", containerHeight); scrollnews(totalTravel, defTiming);});
		}
		
		scrollnews(totalTravel, defTiming);				
		$strip.hover(function(){
		jQuery(this).stop();
		},
		function(){
		var offset = jQuery(this).offset();
		var residualSpace = offset.top + stripHeight;
		var residualTime = residualSpace/settings.travelocity;
		scrollnews(residualSpace, residualTime);
		});			
		});	
};

$(function(){
    $("ul#ticker01").liScroll();
}); 