<?php

/**
 * Additional Information tab
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/additional-information.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

defined('ABSPATH') || exit;

global $product;

$heading = apply_filters('woocommerce_product_additional_information_heading', __('Additional information', 'woocommerce'));

?>

<h2>Additional Information</h2>
<?php
if (have_rows('additional_info')) :
	while (have_rows('additional_info')) : the_row();
		if (get_row_layout() == 'additional_info_block') :
			$title = get_sub_field('title');
			$content = get_sub_field('content');

			echo '<p><strong>' . $title . '</strong></p>';
			echo $content;
		endif;
	endwhile;
endif;
?>
