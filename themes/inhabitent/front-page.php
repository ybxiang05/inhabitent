<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

    <!-- <div class="banner-branding">
        <img src="<?php //echo get_stylesheet_directory_uri();?>/images/logos/inhabitent-logo-full.svg" alt= "Inhabitent full logo"/> -->

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
                    'posts_per_page' => 3,
                    'post_type' => 'post'); 

                $journal_entries = new WP_Query ($arg_journal);?>
            <h2 class="journal-title">Inhabitent Journal</h2>

            <div class="journal-content">
             <?php while ( $journal_entries->have_posts() ) : $journal_entries->the_post(); ?>
                <section class="home-page-journal">
                    <span class="home-page-journal-image"> 
                        <?php the_post_thumbnail('medium'); ?></span>
                        <div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> 
		</div>
                    <a href="<?php the_permalink(); ?>"><h3 class="home-page-journal-title"><?php the_title(); ?></h3></a>
                    
                </section>
            
                

                <?php //get_template_part( 'template-parts/content' ); ?>
                
                


			<?php endwhile; ?>
            </div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
