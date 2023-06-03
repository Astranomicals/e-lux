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

$top_content = get_sub_field('top_content');
?>
<?php get_template_part('components/svg/page-header-curve'); ?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="top--content">
				<?php echo $top_content; ?>
			</div>
			<?php if (have_rows('content_slider')) : ?>
				<div class="swiper-container content--slider">
					<div class="swiper-wrapper">
						<?php
						while (have_rows('content_slider')) : the_row();
							if (get_row_layout() == 'single_content') :
								$image = get_sub_field('image');
								$content = get_sub_field('content');
						?>
								<div class="swiper-slide">
									<div class="content--flex">
										<div class="image--holder">
											<?php display_image($image, 'circle_thumb'); ?>
										</div>
										<div class="content--holder">
											<?php echo $content; ?>
										</div>
									</div>
								</div>
						<?php
							endif;
						endwhile;
						?>
					</div>
				</div>
			<?php endif;  ?>
			<div class="swiper-pagination"></div>
		</div>
	</div>
</div>
