<?php

/**
 * Archive
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Astranomial Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.astranomicals.com/
 * @since      1.0.0
 */

get_header(); ?>
<section class="block block--products">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="filters">

					<?php
					if (get_queried_object()->term_id === 121) :
						$terms = get_terms(array(
							'taxonomy'   => 'product_cat',
							'hide_empty' => true,
							'orderby' => 'name',
							'order' => 'ASC',
							'parent'      => 0,
							'include' => '111,118,195,196,85'
						));
					elseif (get_queried_object()->term_id === 92) :
						$terms = get_terms(array(
							'taxonomy'   => 'product_cat',
							'hide_empty' => true,
							'orderby' => 'name',
							'order' => 'ASC',
							'parent'      => 92,
						));
					endif;
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
<?php get_footer(); ?>
