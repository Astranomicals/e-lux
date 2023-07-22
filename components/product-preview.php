<?php

/**
 * Display Blog Post Preview
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Astranomial Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.astranomicals.com/
 * @since      1.0.0
 */

$post_categories = get_the_terms($post->ID, 'product_cat');
if (!empty($post_categories) && !is_wp_error($post_categories)) {
	$categories = wp_list_pluck($post_categories, 'term_id');
}

?>
<article class="post-preview" data-terms="<?php echo implode(',', $categories); ?>" id="post-<?php the_ID(); ?>">
	<h3 class="back--title"><?php echo get_the_title(); ?></h3>
	<div class="image--holder">
		<a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail('main_blog_thumb'); ?></a>
	</div>
	<?php
	global $product;
	$sku = $product->get_sku();
	$reg_price = $product->get_regular_price();
	$sale_price = $product->get_sale_price();
	$price = $product->get_price();
	?>
	<div class="price">$<?php echo $price; ?></div>
	<div class="flex--buttons">
		<?php if (!$product->is_type('variable')) : ?>
			<a href="<?php echo get_the_permalink(); ?>" class="btn btn--secondary">View More</a>
		<?php endif; ?>
		<div class="btn--second">
			<?php echo do_shortcode('[add_to_cart id="' . $post->ID . '" show_price="false"]'); ?>
		</div>
	</div>
</article>
