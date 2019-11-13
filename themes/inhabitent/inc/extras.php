<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}
	if ( is_singular( 'page' ) ) {
        global $post;
        $classes[] = 'page-' . $post->post_name;
    }

	return $classes;
}

add_filter( 'body_class', 'red_starter_body_classes' );

function inhabitent_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(
				"<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-tent.svg");
		height:65px;
		width:320px;
		background-size: 320px 65px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'inhabitent_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Inhabitent Front Page';
}
add_filter( 'login_headertext', 'my_login_logo_url_title' );
	