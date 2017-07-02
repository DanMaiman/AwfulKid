jQuery(document).ready(function($) {


	$('img.logo').mouseenter(function(){
		$('img.logo').addClass('animated pulse');
	});

	$('img.logo').mouseleave(function(){
		$('img.logo').removeClass('animated pulse');
	});

	$('nav.nav-main-big').click(function(){
		$('nav.nav-main-big').addClass('bounce');
	});

	if ($('a').hasClass('product_type_simple')) {
		$('a').addClass('add_to_cart_button');
	}

	var ifbutton = $('a');
	if (ifbutton.hasClass('add_to_cart_button')) {

	} else {
		$('a').addClass('no_click_thru');
	}

	if ($('ul').hasClass('digital-downloads')) {
		$('a').removeClass('no_click_thru');
	}

		$('a.no_click_thru').click(function (e) {
		    e.preventDefault();                   // prevent default anchor behavior
		    var goTo = this.getAttribute("href"); // store anchor href

		    // do something while timeOut ticks ... 
		    $('div.awk_content').removeClass('bounceInRight');
		    $('div.awk_content').addClass('bounceOutLeft');

		    setTimeout(function(){
		         window.location = goTo;
		    },250);   
		});

	if ($(window).width() > 767) {
		if ($('.order_item').length) {
			var top = $(".product-name").offset().top - 200;
			var left = $('.arrow_box').outerWidth();
			$('arrow_box').addClass('fadeIn');
			$(".arrow_box").css({
				display: "block",
			    top: top+"px",
			    left: -left+'px'
			});
		}
	}
	
});