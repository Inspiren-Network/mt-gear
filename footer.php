<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blocksy
 */

blocksy_after_current_template();
do_action('blocksy:content:bottom');

?>
</main>

<?php
if (is_woocommerce()) {
	echo do_shortcode('[vc_row full_width="stretch_row" el_class="row-full-lp row-full-rp pt-35 md-pt-65 row-gap-b parallax home-contact-row col-gap-15"][vc_column css_animation="fadeInLeft" width="1/2"][vc_custom_heading text="Contact Us Today For
	Our Top-Tier Products" font_container="tag:h3|text_align:left|color:%23ffffff" use_theme_fonts="yes"][vc_column_text el_class="text-white"]Thank you for your support and interest in MT Gear. We will reach out to you as soon as possible.[/vc_column_text][/vc_column][vc_column width="1/2"][vc_raw_html el_class="mb-10 lg-pl-35"]JTNDZGl2JTNFJTBBJTNDaDIlMjBjbGFzcyUzRCUyMnRleHQtNjAlMjBtYi0wJTIwdGV4dC1jZW50ZXIlMjBtZC10ZXh0LWxlZnQlMjIlM0UlM0NzcGFuJTIwY2xhc3MlM0QlMjJzdHJva2UtdGl0bGUlMjIlM0VHZXQlMjBJbiUzQyUyRnNwYW4lM0UlM0MlMkZoMiUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][vc_row_inner content_placement="middle" el_class="home-contact-inner-row reverse"][vc_column_inner width="1/2"][vc_btn title="CONTACT US NOW" style="custom" custom_background="#ff9900" custom_text="#000000" shape="square" align="center" el_class="custom-button mb-35 font-semibold custom-yellow-button md-text-left" link="url:https%3A%2F%2F9.inspiren.dev%2Fmt-gear%2Fcontact-us%2F"][/vc_column_inner][vc_column_inner width="1/2"][vc_custom_heading text="Touch" font_container="tag:h2|text_align:center|color:%23ffffff" use_theme_fonts="yes" el_class="text-60 mb-35 md-text-left"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]');
}
?>

<?php
do_action('blocksy:content:after');
do_action('blocksy:footer:before');

blocksy_output_footer();

do_action('blocksy:footer:after');
?>
</div>





<?php wp_footer(); ?>
<div id="side-contact" class="float-btn">
	<a href="https://wa.me/60333624846" id="whatsapp-float" class="floating-button floating-button_whatsapp" target="_blank"><i id="whatsapp-float" class="fa-brands fa-whatsapp"></i></a>
	<a href="tel:60333624846" id="tel-float" class="floating-button floating-button_phone" target="_blank"><i id="tel-float" class="fa-solid fa-phone"></i></a>
	<a href="mailto:mtgearengsb@gmail.com" id="email-float" class="floating-button floating-button_mail	popmake-701" target="_blank"><i id="email-float" class="fa-solid fa-envelope"></i></a>
	<button class="floating-button float-btn-trigger"><i id="open-float" class="fa-solid fa-comment"></i><i id="close-float" class="fa-solid fa-xmark"></i></button>
</div>

<!-- <script src="https://unpkg.com/split-type"></script> -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script type="text/javascript" src="<?php echo get_theme_file_uri('slick-1.8.1/slick/slick.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo get_theme_file_uri('index.js'); ?>"></script>
</body>

</html>