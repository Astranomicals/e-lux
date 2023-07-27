<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');
?>

<section class="block block--products">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="filters">
					<?php
					$terms = get_terms(array(
						'taxonomy'   => 'product_cat',
						'hide_empty' => true,
						'orderby' => 'name',
						'order' => 'ASC',
						'parent'      => 0,
					));
					$count = 0;

					if (!empty($terms) && !is_wp_error($terms)) {
						echo '<ul>';
						foreach ($terms as $term) {
							echo '<li><button data-id="' . $term->term_id . '">' . $term->name . ' <span>(' . $term->count . ')</span></button></li>';
							$count = $count + $term->count;
						}
						echo '<li><button data-id="-1" class="active">All <span class="count">(' . $count . ')</span></button></li>';
						echo '</ul>';
					}
					?>
				</div>
				<?php if (have_posts()) : ?>
					<div class="grid--products">
						<?php while (have_posts()) : ?>
							<?php the_post(); ?>
							<?php get_template_part('components/product-preview'); ?>
						<?php endwhile; ?>
					</div>
					<?php astra_numeric_posts_nav(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer('shop');
