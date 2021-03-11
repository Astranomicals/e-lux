<?php
/**
 * Displays Hero Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$heading          = get_sub_field( 'heading' );
$background_image = get_sub_field( 'background_image' );
?>
<?php if ( $background_image ) : ?>
	<div class="background--image">
		<img src="<?php echo esc_url( $background_image['sizes']['hero'] ); ?>" />
	</div>
<?php endif; ?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<h1><?php echo $heading; ?></h1>
		</div>
	</div>
</div>
