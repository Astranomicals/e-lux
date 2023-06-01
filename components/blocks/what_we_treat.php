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

$background_image = get_sub_field('background_image');
?>
<div class="background--image">
	<?php display_image($background_image, 'full'); ?>
</div>
<div class="container">
	<div class="row flex-row-reverse align-items-end">
		<div class="col-md-5 offset-md-1">
			<h2>What we treat</h2>
			<?php
			$args = array(
				'post_type' => 'what_we_treat',
				'posts_per_page' => -1,
				'post_parent' => 0,
				'order'	=> 'ASC',
				'orderby' => 'menu_order'
			);
			$query = new WP_Query($args);

			if ($query->have_posts()) :
			?>
				<div class="swiper-container treat--container">
					<div class="swiper-wrapper">
						<?php
						while ($query->have_posts()) :
							$query->the_post();
						?>
							<div class="swiper-slide">
								<h3 data-id="<?php echo $post->ID; ?>"><?php echo get_the_title(); ?></h3>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					</div>
					<div class="swiper--nav">
						<div class="swiper-button-prev"><i class="fal fa-long-arrow-up"></i></div>
						<div class="swiper-button-next"><i class="fal fa-long-arrow-down"></i></div>
					</div>
				</div>
			<?php endif; ?>
			<a href="/what-we-treat/" class="btn btn--secondary">See All Conditions We Treat</a>
		</div>
		<div class="col-md-6">
			<?php
			$args = array(
				'post_type' => 'what_we_treat',
				'posts_per_page' => -1,
				'post_parent' => 0,
				'order'	=> 'ASC',
				'orderby' => 'menu_order'
			);
			$query = new WP_Query($args);

			if ($query->have_posts()) :
				while ($query->have_posts()) :
					$query->the_post();
			?>
					<div class="content--square" data-id="<?php echo $post->ID; ?>">
						<h4><?php echo get_the_title(); ?></h4>
						<?php echo get_field('homepage_excerpt'); ?>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_template_part('components/svg/bottom-svg'); ?>
