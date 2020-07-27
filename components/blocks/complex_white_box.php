<?php
/**
 * Display Complex White Box
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$left_content  = get_sub_field( 'top_content_left' );
$right_content = get_sub_field( 'top_content_right' );
$right_toggle  = get_sub_field( 'right_column_toggle' );
$right_image   = get_sub_field( 'top_image_right' );
$bottom_boxes  = get_sub_field( 'bottom_boxes' );
?>

<div class="container">
	<div class="row">
		<div class="col-lg-6 pr-4">
			<?php echo $left_content; ?>
		</div>
		<div class="col-lg-6 pl-4">
			<?php
			if ( $right_toggle ) :
				echo $right_content;
				else :
					echo '<div class="image--holder right--shade">';
						echo '<img src="' . $right_image['sizes']['large'] . '" />';
					echo '</div>';
				endif;
				?>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="spacer-butterfly"><img src="/wp-content/uploads/2020/07/small-icon.png" /></div>
			<?php if ( have_rows( 'bottom_boxes' ) ) : ?>
				<div class="box--grid">
				<?php while ( have_rows( 'bottom_boxes' ) ) : ?>
					<?php the_row(); ?>
					<?php if ( get_row_layout() == 'box' ) : ?>
						<div class="single--box">
							<?php echo get_sub_field( 'box_content' ); ?>
						</div>		
					<?php endif; ?>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
