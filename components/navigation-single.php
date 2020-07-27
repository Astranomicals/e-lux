<?php
/**
 * Display Single Post Navigation
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

	$older_link = get_next_post_link( '%link', '<i class="far fa-angle-right"></i>' );
	$newer_link = get_previous_post_link( '%link', '<i class="far fa-angle-left"></i>' );
?>

<?php if ( $older_link || $newer_link ) : ?>
	<nav class="d-flex align-items-center navigation navigation-single">
		<div class="arrows">
			<?php echo $newer_link; ?>
			<?php echo $older_link; ?>
		</div>
		<div class="back--button">
			<a href="/blog/" class="btn btn--secondary">Back To Blog</a>
		</div>
	</nav>
<?php endif; ?>
