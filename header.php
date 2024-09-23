<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blocksy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?><?php echo blocksy_html_attr() ?>>

<head>
	<?php do_action('blocksy:head:start') ?>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, viewport-fit=cover">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<?php do_action('blocksy:head:end') ?>
	<link rel="stylesheet" href="<?php echo get_theme_file_uri('slick-1.8.1/slick/slick.css'); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo get_theme_file_uri('master.css'); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo get_theme_file_uri('style2.css'); ?>" type="text/css">
</head>

<?php
ob_start();
blocksy_output_header();
$global_header = ob_get_clean();
?>

<body <?php body_class(); ?> <?php echo blocksy_body_attr() ?>>

	<a class="skip-link show-on-focus" href="<?php echo apply_filters('blocksy:head:skip-to-content:href', '#main') ?>">
		<?php echo __('Skip to content', 'blocksy'); ?>
	</a>

	<?php
	if (function_exists('wp_body_open')) {
		wp_body_open();
	}
	?>

	<div id="main-container">
		<?php
		do_action('blocksy:header:before');

		echo $global_header;

		do_action('blocksy:header:after');
		do_action('blocksy:content:before');
		?>

		<?php
		if (has_term('type-of-gears', 'product_cat')) {
			echo do_shortcode('[rev_slider alias="Type-Of-Gears"][/rev_slider]');
		}
		?>

		<?php
		if (has_term('categories', 'product_cat')) {
			echo do_shortcode('[rev_slider alias="Our-Products"][/rev_slider]');
		}
		?>

		<main <?php echo blocksy_main_attr() ?>>

			<?php
			do_action('blocksy:content:top');
			blocksy_before_current_template();
			?>