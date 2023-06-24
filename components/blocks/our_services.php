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

$content = get_sub_field('content');
?>

<?php get_template_part('components/svg/top-double-curve'); ?>
<div class="container">
	<div class="row align-items-center">
		<div class="col-xl-3 col-md-5 z-1">
			<?php echo $content; ?>
			<a href="/our-services/" class="btn btn--secondary">View All Services</a>
		</div>
		<div class="col-xl-9 col-md-7 z-0">
			<?php
			$args = array(
				'post_type' => 'service',
				'posts_per_page' => -1,
				'post_parent' => 0,
				'order'	=> 'ASC',
				'orderby' => 'menu_order'
			);
			$query = new WP_Query($args);

			if ($query->have_posts()) :
			?>
				<div class="swiper-container services--container">
					<div class="swiper-wrapper">
						<?php
						while ($query->have_posts()) :
							$query->the_post();
						?>
							<div class="swiper-slide">
								<article class="post--square">
									<div class="image--holder">
										<?php echo get_the_post_thumbnail($post->ID, 'services_thumb'); ?>
									</div>
									<div class="content">
										<h3><?php echo get_the_title(); ?></h3>
										<?php echo get_field('homepage_excerpt'); ?>
										<a href="<?php echo get_the_permalink(); ?>" class="btn--link"><i class="far fa-long-arrow-right"></i></a>
									</div>
								</article>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
