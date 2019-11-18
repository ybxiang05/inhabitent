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
            
    <?php /* Shop Stuff Menu */ ?>
    <section class="product-info-container">
            <h2 class="container-header">Shop Stuff</h2>
            <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product_type',
                   'hide_empty' => 1,
               ) );
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>
               <div class="product-type-blocks">
                  <?php foreach ( $terms as $term ) : ?>
                     <div class="product-type-block-wrapper">
                        <img class="product-type-icon" src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                        <p class="product-type-description"><?php echo $term->description; ?></p>
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> stuff</a></p>
                     </div>
                  <?php endforeach; ?>
               </div>
            <?php endif; ?>
         </section>
    <?php /* Start Journal Loop */ ?>
            <?php 
                $arg_journal = array(
                    'order' => 'DESC',
                    'posts_per_page' => 3,
                    'post_type' => 'post'); 

                $journal_entries = new WP_Query ($arg_journal);?>

            <section class="journal-container">
                <h2 class="container-header">Inhabitent Journal</h2>
                <div class="articles-container">
                    <?php while ( $journal_entries->have_posts() ) : $journal_entries->the_post(); ?>
                        <section class="single-article-container">
                            <span class="single-article-image"> 
                                <?php the_post_thumbnail('medium'); ?>
                            </span>
                            <div class="single-entry-text">
                                <div class="entry-meta">
                                    <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> 
                                </div>
                                <a href="<?php the_permalink(); ?>">
                                    <h3 class="single-article-title"><?php the_title(); ?></h3>
                                </a>
                                <a href="<?php the_permalink(); ?>" class="btn-white">
                                read entry</a>
                            </div>
                        </section>
                    <?php endwhile; ?>
                </div>
            </section>
    <?php /* End Journal Loop */ ?>


    <?php /* Start Adventures Loop */ ?>
            <?php 
                $arg_adventures = array(
                    'order' => 'ASC',
                    'posts_per_page' => 4,
                    'post_type' => 'adventures'); 

                $adventures_entries = new WP_Query ($arg_adventures);?>

            <section class="adventures-container">
                <h2 class="container-header">Adventures</h2>
                <div class="adventure-articles-container">
                    <?php while ( $adventures_entries->have_posts() ) : $adventures_entries->the_post(); ?>
                        <section class='single-adventures-container' style="background-image: url('<?php echo get_the_post_thumbnail_url($post, "medium");?>')">
                            
                            <div class="single-entry-text">
                                <a href="<?php the_permalink(); ?>">
                                    <h3 class="single-adventures-title"><?php the_title(); ?></h3>
                                </a>
                                <a href="<?php the_permalink(); ?>" class="btn-white">
                                read more</a>
                            </div>
                        </section>
                    <?php endwhile; ?>
                </div>
            </section>
    <?php /* End Adventures Loop */ ?>
    <a class="btn">more adventures</a>

    
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
