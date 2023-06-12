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

$title = get_sub_field('title');
$gallery = get_sub_field('gallery');
?>

<div class="container">
	<div class="row justify-content-center align-items-center">
		<div class="col-md-4">
			<?php get_template_part('components/svg/logo-icon'); ?>
			<h2>Before <span>&</span> After</h2>
			<a href="<?php echo get_the_permalink($gallery->ID); ?>" class="btn btn--primary">View Photo Results Gallery</a>
		</div>
		<div class="col-md-5 offset-md-1">
			<?php
			$args = array(
				'post_type' => 'gallery',
				'post__in' => array($gallery->ID),
			);
			$query = new WP_Query($args);

			if ($query->have_posts()) :
			?>
				<div class="swiper-container gallery-single--container">
					<div class="swiper-wrapper">
						<?php
						while ($query->have_posts()) :
							$query->the_post();
							$gallery_images = get_field('gallery_images');
							$counter = 0;
							if ($gallery_images) :
								foreach ($gallery_images as $image) :
									if ($counter < 5) : ?>
										<div class="swiper-slide">
											<?php display_image($image, 'full'); ?>
										</div>
									<?php
										$counter++;
									endif; ?>
								<?php endforeach; ?>
							<?php endif; ?>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					</div>
					<?php get_template_part('components/swiper-nav'); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
