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

$content = get_sub_field('top_content');
?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-xl-6 col-md-10">
			<?php echo $content; ?>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-6 col-lg-4">
			<div class="bike--holder">
				<div class="bike--title">
					<h5>Cruisers</h5>
				</div>
				<?php $args = array(
					'post_type' => 'product',
					'order'	=> 'ASC',
					'orderby'	=> 'menu_order',
					'tax_query'     => array(array(
						'taxonomy'  => 'product_cat',
						'field'     => 'term_id',
						'terms'     => array(111),
						'operator'  => 'IN',
					)),
				);
				$query = new WP_Query($args);
				if ($query->have_posts()) :
				?>
					<div class="swiper-container product--slider">
						<div class="swiper-wrapper">
							<?php while ($query->have_posts()) : ?>
								<?php $query->the_post(); ?>
								<div class="swiper-slide">
									<?php get_template_part('components/product-preview'); ?>
								</div>
							<?php endwhile; ?>
						</div>
						<?php get_template_part('components/swiper-nav'); ?>
					</div>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<div class="bike--holder">
				<div class="bike--title">
					<h5>Fat Tires</h5>
				</div>
				<?php $args = array(
					'post_type' => 'product',
					'order'	=> 'DESC',
					'orderby'	=> 'menu_order',
					'tax_query'     => array(array(
						'taxonomy'  => 'product_cat',
						'field'     => 'term_id',
						'terms'     => array(118),
						'operator'  => 'IN',
					)),
				);
				$query = new WP_Query($args);
				if ($query->have_posts()) :
				?>
					<div class="swiper-container product--slider">
						<div class="swiper-wrapper">
							<?php while ($query->have_posts()) : ?>
								<?php $query->the_post(); ?>
								<div class="swiper-slide">
									<?php get_template_part('components/product-preview'); ?>
								</div>
							<?php endwhile; ?>
						</div>
						<?php get_template_part('components/swiper-nav'); ?>
					</div>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<div class="bike--holder">
				<div class="bike--title">
					<h5>Folding</h5>
				</div>
				<?php $args = array(
					'post_type' => 'product',
					'order'	=> 'ASC',
					'orderby'	=> 'menu_order',
					'tax_query'     => array(array(
						'taxonomy'  => 'product_cat',
						'field'     => 'term_id',
						'terms'     => array(85),
						'operator'  => 'IN',
					)),
				);
				$query = new WP_Query($args);
				if ($query->have_posts()) :
				?>
					<div class="swiper-container product--slider">
						<div class="swiper-wrapper">
							<?php while ($query->have_posts()) : ?>
								<?php $query->the_post(); ?>
								<div class="swiper-slide">
									<?php get_template_part('components/product-preview'); ?>
								</div>
							<?php endwhile; ?>
						</div>
						<?php get_template_part('components/swiper-nav'); ?>
					</div>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
