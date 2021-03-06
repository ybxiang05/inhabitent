<?php
/**
 * The template for single Adventures posts.
 *
 * @package RED_Starter_Theme
 */ ?>

<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>
    <article class="single-adventures-page">
        <?php get_template_part('template-parts/content', 'adventures')?>
        <?php get_template_part('template-parts/content', 'social-media');?>
    </article>
<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>