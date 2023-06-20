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
			<a href="<?php echo get_term_link($gallery[0]->term_id); ?>" class="btn btn--primary">View Photo Results Gallery</a>
		</div>
		<div class="col-md-5 offset-md-1">
			<?php
			$args = array(
				'post_type' => 'gallery',
				'tax_query' => array(
					array(
						'taxonomy' => 'gallery_treatment',
						'field' => 'term_id',
						'terms' => $gallery[0]->term_id,
					),
				),
			);
			$query = new WP_Query($args);
			if ($query->have_posts()) :
			?>
				<div class="swiper-container gallery-single--container">
					<div class="swiper-wrapper">
						<?php
						while ($query->have_posts()) :
							$query->the_post();
							$before = get_field('result_before');
							$after = get_field('result_after');
							if ($after) :
						?>
								<div class="swiper-slide">
									<?php display_image($before, 'full'); ?>
									<?php display_image($after, 'full'); ?>
								</div>
							<?php else : ?>
								<div class="swiper-slide">
									<?php display_image($before, 'full'); ?>
								</div>
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
