<?php
/**
 * Template part for displaying journal entries on Home Page (or elsewhere if/when applicable).
 *
 * @package RED_Starter_Theme
 */

?>
<section class="home-page-journal">
    <span class="home-page-journal-image"> 
        <?php the_post_thumbnail('medium'); ?>
    </span>
    <div class="entry-meta">
        <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> 
    </div>
    <a href="<?php the_permalink(); ?>">
        <h3 class="home-page-journal-title"><?php the_title(); ?></h3>
    </a>
</section>