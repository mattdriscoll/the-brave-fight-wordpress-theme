<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Brave_Fight
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<?php /** Adobe Typekit - Erbaum font */ ?>
	<link rel="stylesheet" href="https://use.typekit.net/vjm5bxb.css">

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page">
		<header id="masthead" class="site-header relative z-50">
			<div class="flex justify-center px-3">
				<div class="container flex justify-end py-2">
					<nav>
						<?php wp_nav_menu(
							array(
								'theme_location' => 'header-nav-top-menu',
								'container' => false,
								'menu_class' => 'header-nav-top-menu flex',
							)
						); ?>
					</nav>
				</div>
			</div>
			<div class="flex justify-center px-3 border-b-1 border-t-1 border-dark-green">
				<div class="container flex">
					<div class="w-9/12 sm:w-9/12 md:w-5/12 lg:w-3/12 border-r-1 border-dark-green py-2 pr-4">
						<a href="/">
							<?php echo the_custom_logo(); ?>
						</a>
					</div>

					<div class="w-3/12 sm:w-3/12 md:w-7/12 lg:w-9/12 flex justify-end items-stretch">
						<div class="hidden md:flex items-center sm:pr-10 md:pr-12 lg:pr-16">
							<a href="#" class="text-tbf-orange hover:text-tbf-green  ">
								Schedule A Consultation
							</a>
						</div>
						<div class="flex md:border-r-1 md:border-l-1 md:border-dark-green px-3 md:px-6 lg:px-8">
							<button id="nav-menu-toggle" type="button" class="inline-flex items-center justify-center rounded-md px-2 sm:px-6 md:px-8 lg:px-10 xl:px-12 text-gray-700">
								<span class="sr-only">Open main menu</span>
								<svg width="40" height="23" viewBox="0 0 40 23" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-tbf-green  w-auto">
									<line y1="0.5" x2="40" y2="0.5" stroke="currentColor"></line>
									<line y1="11.5" x2="40" y2="11.5" stroke="currentColor"></line>
									<line y1="22.5" x2="40" y2="22.5" stroke="currentColor"></line>
								</svg>
							</button>
						</div>

						<div id="nav-menu" class="hidden" role="dialog" aria-modal="true">
							<!-- Background backdrop, show/hide based on slide-over state. -->
							<div id="nav-menu-backdrop" class="fixed inset-0 z-10"></div>
							<div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-tbf-green text-tbf-pastel-gray px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
								<div class="flex items-center justify-between">
									<a href="#" class="-m-1.5 p-1.5">
										<span class="sr-only">The Brave Fight</span>
										<?php echo the_custom_logo(); ?>
									</a>
									<button id="nav-menu-close" type="button" class="rounded-md px-2.5 text-cream">
										<span class="sr-only">Close menu</span>
										<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
											<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
										</svg>
									</button>
								</div>
								<?php wp_nav_menu(
									array(
										'theme_location' => 'header-nav-main-menu',
										'container' => false,
										'menu_class' => 'header-nav-main-menu mt-6 flow-root'
									)
								);
								?>
							</div>
						</div>
					</div>
				</div>
			</div>

		</header><!-- #masthead -->