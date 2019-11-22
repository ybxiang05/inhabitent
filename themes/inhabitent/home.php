<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>

				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php 
                $arg_journal = array(
                    'order' => 'ASC',
                    'posts_per_page' => 5,
                    'post_type' => 'post'); 

                $journal_entries = new WP_Query ($arg_journal);?>
			<?php while ( $journal_entries -> have_posts() ) : $journal_entries -> the_post(); ?>
				<div class="journal-entry">
					<?php get_template_part( 'template-parts/content' ); ?>
					<a href="<?php the_permalink(); ?>" class="btn-white">read more &rarr;</a>
				</div>

				<!--#post-##-->
			<?php endwhile; ?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
