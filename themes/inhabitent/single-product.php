<?php
/**
 * The template for displaying all product posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			
					<article id="post-<?php the_ID(); ?>" <?php post_class("single-product-item-wrapper"); ?>>
						<?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'large' );?>
						<section class="single-product-details">
							<h1 class="single-product-name">
								<?php the_title();?>
							</h1>
							<h2 class="single-product-price">
								$ <?php the_field('price');?>
							</h2>
							<p class="single-product-description">
								<?php the_content();?>
							</p>
							<button><i class="fab fa-facebook-f"></i>like</button>
							<button><i class="fab fa-twitter"></i>tweet</button>
							<button><i class="fab fa-pinterest-p"></i>pin</button>
						</section>
		<?php endif; ?>

			<?php //get_template_part( 'template-parts/content', 'single' ); ?>

			<?php //the_post_navigation(); ?>
		
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
