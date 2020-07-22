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

$content = get_sub_field( 'content' );
$image   = get_sub_field( 'background_image' );
?>
<?php if ( ! empty( $image ) ) : ?>
	<div class="image--holder">
		<img src="<?php echo esc_url( $image['sizes']['page_header_thumb'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
	</div>
<?php endif; ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-xxl-6 px-0">
			<?php if ( ! empty( $image ) ) : ?>
				<div class="image--holder--top">
					<img src="<?php echo esc_url( $image['sizes']['page_header_left_thumb'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
				</div>
			<?php endif; ?>
		</div>
		<div class="col-xxl-6 px-0">
			<div class="box--white">
				<div class="box--gray">
					<h4>Procedures</h4>
					<h1><?php echo get_the_title(); ?></h1>
				</div>
				<div class="box--bottom">
					<?php echo $content; ?>
				</div>
			</div>
		</div>
	</div>
</div>
