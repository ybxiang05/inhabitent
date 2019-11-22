<?php
/**
 * The template for displaying archive adventures.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="archive-adventure-title">latest adventures</h1>
			</header><!-- .page-header -->
			
			<div class="articles-container">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>	
				<article id="post-<?php the_ID(); ?>" <?php post_class("adventure-item-wrapper"); ?>>
					<div class="single-adventure-container">
						<section class="entry-header single-adventure-image">
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail( 'full' ); ?>
								</a>

							<div class="adventure-info">
								
								<a href="<?php the_permalink(); ?>">
									<h2 class="adventure-title">
										<?php the_title();?>
									</h2>
								</a>
								<a href="<?php the_permalink(); ?>" class="btn-white">
									read more</a>
							</div>	
							<?php endif; ?>
						</section>
					</div>
				</article><!-- #post-## -->
			<?php endwhile; ?>
			</div>	

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
