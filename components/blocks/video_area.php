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

?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10 col-12">
			<h2>Why Choose Skin Rejuvenation Clinic?</h2>
			<div class="video--area">
				<?php $counter = 1; ?>
				<?php if (have_rows('video_carousel')) : ?>
					<div class="swiper-container video--container">
						<div class="swiper-wrapper">
							<?php while (have_rows('video_carousel')) : the_row();
								if (get_row_layout() == 'single_video') :
									$video_id = get_sub_field('video_id');
									$video_poster = get_sub_field('video_poster');
									$video_title = get_sub_field('video_title');
							?>
									<div class="swiper-slide">
										<div class="video--holder">
											<video poster="<?php echo wp_get_attachment_image_url($video_poster['ID'], 'hero'); ?>" id="video-<?php echo $counter; ?>" allow="autoplay" class="embed-responsive-item" src="<?php $video_id; ?>" allowfullscreen="" data-ready="true"></video>
											<div class="play--video" data-video="<?php echo $counter; ?>"><i class="fal fa-play"></i></div>
										</div>
									</div>
							<?php
									$counter++;
								endif;
							endwhile;
							?>
						</div>
					</div>
				<?php endif; ?>
				<?php
				if (have_rows('video_carousel')) :
				?>
					<div class="swiper-titles">
						<?php
						while (have_rows('video_carousel')) : the_row();
							if (get_row_layout() == 'single_video') :
								$title = get_sub_field('video_title');
						?>
								<div class="single-title"><?php echo $title; ?></div>
						<?php
							endif;
						endwhile;
						?>
					</div>
				<?php
				endif;
				?>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</div>
</div>
