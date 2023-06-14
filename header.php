<?php

/**
 * The header for our theme
 * 
 * **********************************************************
 * NOTE : This is the MVP header, which removes the full nav 
 * menu. When the full site launches, replace this file with 
 * what is currently in header-full-site.php
 * **********************************************************
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
	<div id="page" class="page">
		<header id="masthead" class="site-header relative z-50">

			<div class="flex justify-center px-3 border-b-1 border-t-1 border-dark-green">
				<div class="container flex">
					<div class="w-9/12 sm:w-9/12 md:w-5/12 lg:w-3/12  py-2 pr-4">
						<div class="max-w-[13rem] md:max-w-[16rem] lg:max-w-[18rem] xl:max-w-[initial]">
							<?php echo the_custom_logo(); ?>
						</div>
					</div>

					<div class="w-3/12 sm:w-3/12 md:w-7/12 lg:w-9/12 flex justify-end items-stretch">
						<nav class="flex items-center">
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
			</div>

		</header><!-- #masthead -->