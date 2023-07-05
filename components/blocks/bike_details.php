<?php

/**
 * Display Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$top_header = get_sub_field('top_header');
$bike_image = get_sub_field('bike_image');
?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<h2><?php echo $top_header; ?></h2>
			<?php display_image($bike_image, 'full'); ?>
			<?php if (have_rows('details')) : ?>
				<div class="flex--details">
					<?php while (have_rows('details')) : the_row(); ?>
						<?php if (get_row_layout() == 'single_detail') : ?>
							<?php $detail = get_sub_field('detail'); ?>
							<?php $detail_title = get_sub_field('detail_title'); ?>
							<div class="flex--single">
								<p><?php echo $detail; ?></p>
								<h6><?php echo $detail_title; ?></h6>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
