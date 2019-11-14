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

					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<?php if(is_front_page() || is_page('About')):?>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-tent-white.svg" height="35px" alt="Inhabitent tent logo"/>
							<?php else:?>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-tent.svg" height="35px" alt="Inhabitent tent logo"/>
			<?php endif;?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary',
					'menu' => 'primary-menu',
					'menu_class' => 'menu nav-menu' ) ); 
					?>
					<?php get_search_form();?>
					

					
				</nav><!-- #site-navigation -->
				

				


			</header><!-- #masthead -->

			<div id="content" class="site-content">

			
				<?php 
				if(is_front_page()):
					if ( has_post_thumbnail() ) : ?>
						<section class="hero-banner hero-banner-fp">
							<?php the_post_thumbnail( 'full', ['class' => 'hero-banner-image'] ); ?>
					
						<!-- Todo add the inhabitent logo here -->
							<img class="logo-full" src="<?php echo get_stylesheet_directory_uri();?>/images/logos/inhabitent-logo-full.svg" alt="Inhabitent logo"/>
						</section>
					<?php endif;	
				endif;	
				?>

				<?php 
				if(is_page('About')):
					if ( has_post_thumbnail() ) : ?>
						<section class="hero-banner hero-banner-about">
						<?php the_post_thumbnail( 'full', ['class' => 'hero-banner-image'] ); ?>
						<h2 class="hero-banner-title">
						<?php echo get_the_title(); ?></h2>
						</section>
					<?php endif;	
				endif;	
				?>
