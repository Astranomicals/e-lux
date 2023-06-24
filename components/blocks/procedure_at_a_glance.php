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
$background_image = get_sub_field('background_image');
?>
<?php if ($background_image) : ?>
	<div class="background--image">
		<?php display_image($background_image, 'full'); ?>
	</div>
<?php endif; ?>
<div class="container">
	<div class="row flex-row-reverse align-items-end">
		<div class="col-xl-5 offset-xl-1 col-md-7 col-lg-6">
			<?php if ($title) : ?>
				<h2><?php echo $title; ?></h2>
			<?php else : ?>
				<h2>Procedure At A Glance</h2>
			<?php endif; ?>
			<?php if (have_rows('details')) : ?>
				<div class="swiper-container treat--container">
					<div class="swiper-wrapper">
						<?php while (have_rows('details')) : the_row(); ?>
							<?php if (get_row_layout() == 'single_detail') : ?>
								<?php $detail_title = get_sub_field('title'); ?>
								<?php $content = get_sub_field('content'); ?>
								<div class="swiper-slide">
									<h3><?php echo $detail_title; ?></h3>
									<?php echo $content; ?>
								</div>
							<?php endif; ?>
						<?php endwhile; ?>
					</div>
					<div class="swiper--nav">
						<div class="swiper-button-prev"><i class="fal fa-long-arrow-up"></i></div>
						<div class="swiper-button-next"><i class="fal fa-long-arrow-down"></i></div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_template_part('components/svg/bottom-svg'); ?>
