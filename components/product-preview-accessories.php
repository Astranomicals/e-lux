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
global $woocommerce;
$product = wc_get_product(get_the_ID());
$sku = $product->get_sku();
$reg_price = $product->get_regular_price();
$sale_price = $product->get_sale_price();
$price = $product->get_price();
?>
<article class="post-preview" id="post-<?php the_ID(); ?>">
	<h3 class="bike--title"><?php echo get_the_title(); ?></h3>
	<div class="image--holder">
		<a href="<?php echo get_the_permalink(); ?>">
			<?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
		</a>
	</div>
	<div class="price">$<?php echo $price; ?></div>
	<div class="flex--buttons">
		<a href="<?php echo get_the_permalink(); ?>" class="btn btn--secondary">View More</a>
		<div class="btn--second">
			<?php echo do_shortcode('[add_to_cart id="' . $post->ID . '" show_price="false"]'); ?>
		</div>
	</div>
</article>
