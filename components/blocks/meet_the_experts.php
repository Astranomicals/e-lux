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

$small_title = get_sub_field( 'title' );
$large_title = get_sub_field( 'large_title' );
$button      = get_sub_field( 'button' );
$image       = get_sub_field( 'background_image' );

?>

<?php if ( ! empty( $image ) ) : ?>
	<div class="image--holder">
		<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
	</div>
<?php endif; ?>

<div class="container-fluid">
	<div class="row ">
		<div class="col-12">
			<h5><?php echo esc_attr( $small_title ); ?></h5>
			<h2><?php echo esc_attr( $large_title ); ?></h2>
			<div class="spacer"><img src="/wp-content/uploads/2020/07/diamond-spacer.png" alt="" width="103" height="23" class="aligncenter size-full wp-image-308"></div>
			<?php if ( have_rows( 'content' ) ) : ?>
			<div class="doctor-flex">
				<?php
				while ( have_rows( 'content' ) ) :
					the_row();
					?>
						<?php if ( get_row_layout() == 'doctor_info' ) : ?>
							<div class="doctor--name">
								<a href="<?php echo esc_url( get_sub_field( 'doctor_link' ) ); ?>">
									<h3><?php echo get_sub_field( 'name' ); ?></h3>
								</a>
							</div>
						<?php endif; ?>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
			<?php if ( $button ) : ?>
				<a href="<?php echo $button; ?>" class="btn btn--secondary">Learn About Edina Plastic Surgery &amp; Our Surgeons</a>
			<?php endif; ?>
		</div>
	</div>
</div>
