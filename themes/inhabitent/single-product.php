<?php
/**
 * The template for displaying single product posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class("single-product-item-wrapper"); ?>>
					<div class="single-product-image">
						<?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'large' );?>
						<?php endif; ?>
					</div>
					<div class="single-product-details">
						<h1 class="single-product-name">
							<?php the_title();?>
						</h1>
						<h2 class="single-product-price">
							$ <?php the_field('price');?>
						</h2>
						<p class="single-product-description">
							<?php the_content();?>
						</p>
						<?php get_template_part('template-parts/content', 'social-media');?>
					</div>
				</article>		
			<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
