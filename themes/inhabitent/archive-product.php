<?php
/**
 * The template for displaying archive products.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="archive-product-title">shop stuff</h1>
			</header><!-- .page-header -->

			<?php /* Shop Stuff Menu */ ?>
    	<nav class="nav-menu">
            <?php $terms = get_terms( array(
                   'taxonomy' => 'product_type',
                   'hide_empty' => 1,
               ) );
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>
				<?php foreach ( $terms as $term ) : ?>
					<li class="menu-item">
						<a href="<?php echo get_term_link( $term ); ?>" ><?php echo $term->name; ?></a>
			   		</li>
				<?php endforeach; ?>
            <?php endif; ?>
		</nav>
			<div class="articles-container">
				
			<?php /* Start the Loop */ ?>
			<?php $arg_products = array(
				'order' => 'ASC',
				'posts_per_page' => 12,
				'post_type' => 'product');
				
				$products_entries = new WP_Query ($arg_products);?>

			<?php while ( $products_entries->have_posts() ) :  $products_entries->the_post(); ?>	
				<article id="post-<?php the_ID(); ?>" <?php post_class("product-item-wrapper"); ?>>
				<div class="single-article-container">
					<section class="entry-header single-article-image">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'medium' ); ?>
							</a>
					</section>

						<div class="product-info">
							<p class="elipses">
								...........................
			   				</p>
							<p class="product-name">
								<?php the_title();?>
							</p>
							<p class="product-price">
								$<?php the_field('price'); ?>
							</p>
			  			</div>	
						<?php endif; ?>

				</article><!-- #post-## -->

				<?php endwhile; ?>
				</div>
			</div>	


		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
