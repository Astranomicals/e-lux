<?php
/**
 * Display About Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$content     = get_sub_field( 'content' );
$left_image  = get_sub_field( 'left_image' );
$right_image = get_sub_field( 'right_image' );
?>


<div class="container">
	<div class="row justify-content-center">
		<div class="col-xl-6 col-lg-8 col-md-10 col-12">
			<?php echo $content; ?>
		</div>
	</div>
</div>

<?php if ( ! empty( $left_image ) ) : ?>
	<div class="image--holder left--image">
		<img src="<?php echo esc_url( $left_image['sizes']['large'] ); ?>" alt="<?php echo esc_attr( $left_image['alt'] ); ?>" />
	</div>
<?php endif; ?>
<?php if ( ! empty( $right_image ) ) : ?>
	<div class="image--holder right--image">
		<img src="<?php echo esc_url( $right_image['sizes']['large'] ); ?>" alt="<?php echo esc_attr( $right_image['alt'] ); ?>" />
	</div>
<?php endif; ?>