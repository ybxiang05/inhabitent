<?php get_header(); ?>

<?php //include('banner.php'); ?>
<?php while(have_posts()): the_post();
get_template_part('template-parts/content', 'page'); ?>
<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>