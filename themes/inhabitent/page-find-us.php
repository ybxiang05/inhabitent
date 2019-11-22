<?php get_header();?>

<?php while(have_posts()): the_post();?>
    <div class="find-us-container">
        <?php get_template_part('template-parts/content', 'page');?>
    </div>
<?php endwhile;?>
<?php get_sidebar();?>

<?php get_footer();?>