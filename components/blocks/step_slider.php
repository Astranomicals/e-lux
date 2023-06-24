<?php

/**
 * Display Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Astranomial Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.astranomicals.com/
 * @since      1.0.0
 */

$title = get_sub_field('title');

?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<h2><?php echo $title; ?></h2>
			<?php if (have_rows('steps')) : ?>
				<div class="swiper-container swiper--steps">
					<div class="swiper-wrapper">
						<?php while (have_rows('steps')) : the_row(); ?>
							<?php if (get_row_layout() == 'single_step') : ?>
								<?php $image = get_sub_field('image'); ?>
								<?php $step_title = get_sub_field('title'); ?>
								<?php $content = get_sub_field('content'); ?>
								<div class="swiper-slide">
									<div class="image--holder">
										<?php display_image($image, 'full'); ?>
									</div>
									<div class="content">
										<h3><?php echo $step_title; ?></h3>
										<?php echo $content; ?>
									</div>
								</div>
							<?php endif; ?>
						<?php endwhile; ?>
					</div>
					<?php get_template_part('components/swiper-nav'); ?>
					<div class="swiper-pagination"></div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
