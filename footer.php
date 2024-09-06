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
