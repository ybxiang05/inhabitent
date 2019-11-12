<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation" style="background: ">
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //echo esc_html( 'Main Navigation' ); ?></button> -->

					<a href='http://localhost:3000/Inhabitent/wordpress/'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-tent.svg" height="35px" alt="Inhabitent tent logo"/>
					<?php wp_nav_menu( array( 'theme_location' => 'primary',
					'menu' => 'primary-menu',
					'menu_class' => 'menu nav-menu' ) ); ?>
					<?php get_search_form();?>

					
				</nav><!-- #site-navigation -->
				<?php include('banner.php');?>

			</header><!-- #masthead -->

			<div id="content" class="site-content">
