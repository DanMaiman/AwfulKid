jQuery(document).ready(function() {


	jQuery('img.logo').mouseenter(function(){
		jQuery('img.logo').addClass('animated pulse');
	});

	jQuery('img.logo').mouseleave(function(){
		jQuery('img.logo').removeClass('animated pulse');
	});

	jQuery('a').click(function (e) {
	    e.preventDefault();                   // prevent default anchor behavior
	    var goTo = this.getAttribute("href"); // store anchor href

	    // do something while timeOut ticks ... 
	    jQuery('div.awk_content').removeClass('bounceInRight');
	    jQuery('div.awk_content').addClass('bounceOutLeft');

	    setTimeout(function(){
	         window.location = goTo;
	    },250);       
	});

	
});