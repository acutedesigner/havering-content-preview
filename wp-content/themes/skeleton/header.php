<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Intranet
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="shortcut icon" 
      type="image/x-icon" 
      href="<?php bloginfo( 'template_url' ); ?>/favicon.ico">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'skeleton' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;
			?>

		</div><!-- .site-branding -->

		<nav class="cssplay_menu cssplay_responsive" data-mobile="1024">
			<ul>
				<li class="close">CLOSE</li>
				<li class="has-sub">
					<a href="index.html">Help with work</a>
					<?php wp_nav_menu( array( 'menu' => 'help-with-work', 'menu_id' => 'primary-menu', 'container' => 'false' ) ); ?>
				</li>
				<li class="has-sub">
					<a href="index.html">Support for you</a>
					<?php wp_nav_menu( array( 'menu' => 'support-for-you', 'menu_id' => 'primary-menu', 'container' => 'false' ) ); ?>
				</li>
				<li class="has-sub">
					<a href="index.html">HR</a>
					<?php wp_nav_menu( array( 'menu' => 'hr', 'menu_id' => 'primary-menu', 'container' => 'false' ) ); ?>
				</li>
				<li class="has-sub">
					<a href="index.html">Self service</a>
					<?php wp_nav_menu( array( 'menu' => 'self-service', 'menu_id' => 'primary-menu', 'container' => 'false' ) ); ?>
				</li>
				<li class="has-sub">
					<a href="index.html">ICT</a>
					<?php wp_nav_menu( array( 'menu' => 'ict', 'menu_id' => 'primary-menu', 'container' => 'false' ) ); ?>
				</li>
				<li class="has-sub">
					<a href="index.html">Committee Services</a>
					<?php wp_nav_menu( array( 'menu' => 'committee-services', 'menu_id' => 'primary-menu', 'container' => 'false' ) ); ?>
				</li>
				<li class="has-sub">
					<a href="index.html">Health and Safety</a>
					<?php wp_nav_menu( array( 'menu' => 'health-and-safety', 'menu_id' => 'primary-menu', 'container' => 'false' ) ); ?>
				</li>
				<li class="has-sub">
					<a href="index.html">Our Services</a>
					<?php wp_nav_menu( array( 'menu' => 'our-services', 'menu_id' => 'primary-menu', 'container' => 'false' ) ); ?>
				</li>
				<li class="has-sub">
					<a href="index.html">About Havering</a>
					<?php wp_nav_menu( array( 'menu' => 'help-with-work', 'menu_id' => 'primary-menu', 'container' => 'false' ) ); ?>
				</li>

			</ul>
		</nav>
		<span class="cssplay_toggle">MENU</span>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
