<?php
/**
 * Display Page Header
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$top_title   = get_sub_field( 'title' );
$large_title = get_sub_field( 'large_title' );
$image       = get_sub_field( 'background_image' );
?>
<?php if ( ! empty( $image ) ) : ?>
	<div class="image--holder">
		<img src="<?php echo esc_url( $image['sizes']['hero_thumb'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
	</div>
<?php endif; ?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-xl-8 col-12">
			<h5><?php echo $top_title; ?></h5>
			<h1><?php echo $large_title; ?></h1>
		</div>
	</div>
</div>
