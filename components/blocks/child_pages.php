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

global $this_ID;
$this_ID = get_the_ID();
$post_type = get_post_type($this_ID);
$args = array(
	'post_type' => $post_type,
	'post_parent'	=> $this_ID,
	'posts_per_page' => -1,
	'order'	=> 'ASC',
	'orderby' => 'menu_order'
);
$query = new WP_Query($args);
?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<?php if ($query->have_posts()) : ?>
				<div class="square--grid">
					<?php while ($query->have_posts()) : ?>
						<?php $query->the_post(); ?>
						<?php get_template_part('components/what-we-treat'); ?>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
