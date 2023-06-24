<?php

/**
 * Display Blocks
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Astranomial Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.astranomicals.com/
 * @since      1.0.0
 */

if (have_rows('blocks')) :
	while (have_rows('blocks')) :
		the_row();
		$layout   = get_row_layout();
		$block_id = get_sub_field('block_id');
		$block_class = get_sub_field('block_class');

		if ($block_id || $block_class) :
			echo '<section id="' . esc_attr($block_id) . '" class="block block--' . esc_attr($layout) . ' ' . esc_attr($block_class) . '">';
		else :
			echo '<section class="block block--' . esc_attr($layout) . '">';
		endif;
		get_template_part('components/blocks/' . $layout);
		echo '</section>';
	endwhile;
endif;
