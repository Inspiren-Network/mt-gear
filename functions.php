<?php
if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
});

add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);
add_filter( 'use_widgets_block_editor', '__return_false' );

// contact form 7 remove p tag
add_filter('wpcf7_autop_or_not', '__return_false');

/*
Title: Woocommerce & ACF - Custom field
add_action( 'woocommerce_single_product_summary', 'add_button', 21 );
function add_button() {
	echo "<div class='contact-button-container'>";
	if(get_field( "download_brochure" )){
		$value = get_field( "download_brochure" );
		echo "<a href='$value' class='contact-button download-brochure-button' target='_blank'>Download Brochure</a>";
	}
	echo "<a href='#' class='contact-button contact-us-button' target='_blank'>Contact Us</a>";
	echo "</div>";
}
*/
