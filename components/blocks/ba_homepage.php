<?php
/**
 * Display Homepage Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$content          = get_sub_field( 'content' );
$background_image = get_sub_field( 'background_image' );
?>

<?php if ( ! empty( $background_image ) ) : ?>
	<div class="image--holder">
		<img src="<?php echo esc_url( $background_image['sizes']['hero_thumb'] ); ?>" alt="<?php echo esc_attr( $background_image['alt'] ); ?>" />
	</div>
<?php endif; ?>

<div class="container">
	<div class="row">
		<div class="col-xxl-5 col-xl-6 col-lg-7 col-md-7">
			<?php echo $content; ?>
		</div>
	</div>
</div>
