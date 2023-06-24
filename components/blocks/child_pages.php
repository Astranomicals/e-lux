<?php

/**
 * Display Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Astranomial Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.astranomicals.com/
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
						<?php $args = array(
							'post_type' => $post_type,
							'post_parent'	=> $post->ID,
							'posts_per_page' => -1,
							'order'	=> 'ASC',
							'orderby' => 'menu_order'
						);
						$the_query = new WP_Query($args);
						if ($the_query->have_posts()) : ?>

							<?php while ($the_query->have_posts()) : ?>
								<?php $the_query->the_post(); ?>
								<?php get_template_part('components/what-we-treat'); ?>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</div>
</div>
