jQuery(document).ready(function() {


	jQuery('h1.awkLogo').mouseenter(function(){
		jQuery('h1.awkLogo').addClass('animated pulse');
	});

	jQuery('h1.awkLogo').mouseleave(function(){
		jQuery('h1.awkLogo').removeClass('animated pulse');
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