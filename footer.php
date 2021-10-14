<?php
/**
 * Footer
 *
 * Main footer file for the theme.
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

	$address      = get_field( 'business_street_address', 'option' );
	$address2     = get_field( 'business_city_state_zip', 'option' );
	$address_link = get_field( 'business_address_link', 'option' );
	$phone        = get_field( 'business_phone_display', 'option' );
	$phone_url    = get_field( 'business_phone_url', 'option' );
?>

<footer>
	<div class="container copyright">
		<div class="row">
			<div class="col-12 copyright--flex">
				<p>Copyright &copy; <?php echo esc_attr( gmdate( 'Y' ) ); ?> <?php echo esc_attr( get_bloginfo() ); ?>. All Rights Reserved | <a href="/privacy-policy/">Privacy Policy</a> | <a href="/terms-of-use/">Terms of Service</a> | <a href="/sitemap/">Sitemap</a></p> 
				<p>Designed By <a href="https://www.incrediblemarketing.com/" target="_blank"><?php get_template_part( 'components/svg/incredible-marketing' ); ?>Incredible Marketing</a></p>
			</div>
		</div>
	</div>
</footer>

</div><!-- end of .site-wrap -->

<?php wp_footer(); ?>
<?php echo get_field( 'footer_scripts', 'options' ); ?>
</body>
</html>
