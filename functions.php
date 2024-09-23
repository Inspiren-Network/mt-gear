<?php
if (! defined('WP_DEBUG')) {
	die('Direct access forbidden.');
}
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
});

add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);
add_filter('use_widgets_block_editor', '__return_false');

// contact form 7 remove p tag
add_filter('wpcf7_autop_or_not', '__return_false');

/*
Title: Woocommerce & ACF - Custom field
*/
add_action('woocommerce_single_product_summary', 'add_button', 21);
function add_button()
{
	echo "<div class='contact-button-container'>";
	echo "<a href='#' class='contact-button contact-us-button' target='_blank'><img class='w-180' src=" . get_theme_file_uri('images/whatsapp-button.png') . " alt='whatsapp-button'></a>";

	if (get_field("download_brochure")) {
		$value = get_field("download_brochure");
		echo "<a href='$value' class='contact-button download-brochure-button' target='_blank'><img class='w-180' src=" . get_theme_file_uri('images/pdf-button.png') . " alt='pdf-button'></a>";
	}
	echo "</div>";
}

/*
Title: Woocommerce - Add Custom Class Conditions
*/
add_filter('body_class', 'bbloomer_wc_product_cats_css_body_class');

function bbloomer_wc_product_cats_css_body_class($classes)
{
	if (is_woocommerce()) {
		if (has_term('type-of-gears', 'product_cat')) {
			$classes[] = 'category-type-of-gears';
		}

		if (has_term('categories', 'product_cat')) {
			$classes[] = 'category-categories';
		}
	}

	return $classes;
}
