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
		<div class="col-xl-8 col-md-10">
			<h2>Manual Links</h2>
			<?php if (have_rows('review_links')) : ?>
				<div class="links">
					<?php while (have_rows('review_links')) : the_row(); ?>
						<?php if (get_row_layout() == 'single_link') : ?>
							<?php
							$link_text = get_sub_field('link_text');
							$link_url = get_sub_field('link_url');
							?>
							<a href="<?php echo $link_url; ?>" target="_blank" class="btn btn--primary"><i class="fal fa-pdf"></i> <?php echo $link_text; ?></a>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<h2>Video Manuals</h2>
			<?php if (have_rows('video_area')) : ?>
				<div class="swiper-container video--container">
					<?php get_template_part('components/swiper-nav'); ?>
					<div class="swiper-wrapper">
						<?php while (have_rows('video_area')) : the_row(); ?>
							<?php if (get_row_layout() == 'single_video') : ?>
								<?php
								$youtube_id = get_sub_field('video_id');
								$title = get_sub_field('video_title');
								$company = get_sub_field('company');
								$review_link = get_sub_field('review_link');
								?>
								<div class="swiper-slide">
									<div class="video--article">
										<div class="video--holder">
											<img src="https://img.youtube.com/vi/<?php echo $youtube_id; ?>/maxresdefault.jpg" />
											<a href="http://www.youtube.com/watch?v=<?php echo $youtube_id; ?>?autoplay=1" class="btn--play"><i class="fas fa-play"></i></a>
										</div>
										<div class="content">
											<h2><?php echo $title; ?></h2>
											<?php if ($review_link) : ?>
												<h3><a href="<?php echo $review_link; ?>" target="_blank"><i class="fal fa-link"></i> <?php echo $company; ?></a></h3>
											<?php else : ?>
												<h3><?php echo $company; ?></h3>
											<?php endif; ?>
										</div>
									</div>
								</div>
							<?php endif; ?>
						<?php endwhile; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
