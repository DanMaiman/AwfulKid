jQuery(document).ready(function() {
	jQuery(".children").addClass("nav");
	jQuery(".children a").css("padding-left", "30px");
	jQuery(".children a").css("margin-top", "0px");
	jQuery(".children a").css("margin-bottom", "0px");
	jQuery(".children a").css("margin-left", "0px");

	jQuery('h1.awkLogo').mouseenter(function(){
		jQuery('h1.awkLogo').addClass('animated pulse');
	});

	jQuery('h1.awkLogo').mouseleave(function(){
		jQuery('h1.awkLogo').delay(950).removeClass('animated pulse');
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