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
	<div class="row">
		<div class="col-xl-4">
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
									<?php
									$product = wc_get_product(get_the_ID());
									$sku = $product->get_sku();
									$reg_price = $product->get_regular_price();
									$sale_price = $product->get_sale_price();
									$price = $product->get_price();
									?>
									<h3 class="back--title"><?php echo get_the_title(); ?></h3>
									<?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
									<div class="price">$<?php echo $price; ?></div>
									<div class="flex--buttons">
										<a href="<?php echo get_the_permalink(); ?>" class="btn btn--secondary">View More</a>
										<div class="btn--second">
											<?php echo do_shortcode('[add_to_cart id="' . $post->ID . '" show_price="false"]'); ?>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
						<?php get_template_part('components/swiper-nav'); ?>
					</div>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-xl-4">
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
									<?php
									$product = wc_get_product(get_the_ID());
									$sku = $product->get_sku();
									$reg_price = $product->get_regular_price();
									$sale_price = $product->get_sale_price();
									$price = $product->get_price();
									?>
									<h3 class="back--title"><?php echo get_the_title(); ?></h3>
									<?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
									<div class="price">$<?php echo $price; ?></div>
									<div class="flex--buttons">
										<a href="<?php echo get_the_permalink(); ?>" class="btn btn--secondary">View More</a>
										<div class="btn--second">
											<?php echo do_shortcode('[add_to_cart id="' . $post->ID . '" show_price="false"]'); ?>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
						<?php get_template_part('components/swiper-nav'); ?>
					</div>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-xl-4">
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
									<?php
									$product = wc_get_product(get_the_ID());
									$sku = $product->get_sku();
									$reg_price = $product->get_regular_price();
									$sale_price = $product->get_sale_price();
									$price = $product->get_price();
									?>
									<h3 class="back--title"><?php echo get_the_title(); ?></h3>
									<?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
									<div class="price">$<?php echo $price; ?></div>
									<div class="flex--buttons">
										<a href="<?php echo get_the_permalink(); ?>" class="btn btn--secondary">View More</a>
										<div class="btn--second">
											<?php echo do_shortcode('[add_to_cart id="' . $post->ID . '" show_price="false"]'); ?>
										</div>
									</div>
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
