<?php    

function awk_theme_style() {
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/animate.css' );
	wp_enqueue_style( 'ie10bug_css', get_template_directory_uri() . '/assets/css/ie10-viewport-bug-workaround.css' );

}

add_action ('wp_enqueue_scripts', 'awk_theme_style');

function awk_theme_js () {

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/dist/js/bootstrap.min.js', array('jquery'), '', true);
	wp_enqueue_script( 'ie10bug_js', get_template_directory_uri() . '/assets/js/ie10-viewport-bug-workaround.js', array('jquery'), '', true);
	wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/custom.js', array('jquery'), '', true);


}

add_action( 'wp_enqueue_scripts', 'awk_theme_js' );

?>