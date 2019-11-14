<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class='footer-info-container'>
					<div class="contact-info">
						<h3>Contact Info</h3>
						<p>

							<i class="fa fa-envelope "></i>
								<a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
						</p>
						<p>
							<i class="fas fa-phone"></i><a href="tel:5553434567891">778-456-7891</a>
						</p>
						<p>
							<i class="fab fa-facebook-square"></i>
							<i class="fab fa-twitter-square"></i>
						</p>
					</div><!-- .contact-info -->
					<div class="business-hours">
						<h3>Business Hours</h3>
						<p>
							<span class="hours-date">Monday-Friday:</span> 9am to 5pm
							<br>
							<span class="hours-date">Saturday:</span> 10am to 2pm
							<br>
							<span class="hours-date">Sunday:</span> Closed
						</p>
					</div>
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<img class="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg"  alt="Inhabitent tent logo"/>
					</a>
				</div>
				<div class="copyright">copyright &copy; inhabitant</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
