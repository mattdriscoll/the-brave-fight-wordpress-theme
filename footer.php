<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Brave_Fight
 */

$footer_options = get_field('footer_content', 'option');
$footer_background_image = $footer_options["footer_background_image"];
$footer_foreground_image = $footer_options["footer_foreground_image"];
?>

<footer id="colophon" class="site-footer bg-tbf-green text-tbf-pastel-gray relative">

	<?php echo wp_get_attachment_image($footer_foreground_image, 'full', false, array('class' => 'footer-foreground-image absolute w-8/12 sm:w-6/12 md:w-7/12 lg:w-5/12 2xl:w-6/12 max-w-[45rem] z-20 -top-1 -left-0')); ?>

	<div class="container">

		<div class="grid lg:grid-cols-[7fr,_5fr] lg:gap-8 pt-12 lg:pt-16 lg:pb-24">
			<div class="footer-background-image-section grid w-full">
				<?php echo wp_get_attachment_image($footer_background_image, 'full', false, array('class' => 'notched-corner-br opacity-60 h-full w-full object-cover object-center')); ?>
			</div>
			<div class="footer-menu-section w-full">

				<div class="footer-main-nav-container flex flex-col md:flex-row md:justify-between md:items-center py-8">
					<?php wp_nav_menu(array('theme_location' => 'footer-nav-main-menu', 'container' => false)); ?>
					<?php wp_nav_menu(array('theme_location' => 'footer-nav-aside-menu', 'container' => false)); ?>
				</div>

				<div class="footer-secondary-nav-container border-b-1 border-t-1 border-tbf-orange py-4">
					<?php wp_nav_menu(array('theme_location' => 'footer-secondary-nav', 'container' => false)); ?>
				</div>

			</div>
		</div>

		<div class="pt-6 lg:py-8">
			<?php wp_nav_menu(array('theme_location' => 'footer-legal-nav', 'container' => false)); ?>
		</div>

		<?php
		/**
		 * <pre class="prose">
		 * 	<code>
		 * 		<?php var_dump($footer_options); ?>
		 * 	</code>
		 * </pre>
		 */
		?>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>