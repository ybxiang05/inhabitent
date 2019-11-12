<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
<h3>Business Hours</h3>
	<p>
		<span class="hours-date">Monday-Friday:</span> 9am to 5pm
		<br>
		<span class="hours-date">Saturday:</span> 10am to 2pm
		<br>
		<span class="hours-date">Sunday:</span> Closed
	</p>
<?php dynamic_sidebar( 'sidebar-1' ); ?>
	
</div><!-- #secondary -->
