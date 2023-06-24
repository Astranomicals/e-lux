<?php

/**
 * Archive Gallery
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


<section class="block block--archive-squares block--archive-gallery">
	<div class="container">
		<div class="row flex-row-reverse">
			<div class="col-12 col-xl-9 col-lg-8">
				<?php if (have_posts()) : ?>
					<div class="square--grid">
						<?php while (have_posts()) : ?>
							<?php the_post(); ?>
							<?php get_template_part('components/gallery-preview'); ?>
						<?php endwhile; ?>
					</div>
					<?php astra_numeric_posts_nav(); ?>
				<?php endif; ?>
			</div>
			<div id="sidebar" class="col-xl-3 col-lg-4">
				<h3>Filter Gallery</h3>
				<?php
				$taxonomies = get_terms(array(
					'taxonomy' => 'gallery_treatment',
					'hide_empty' => true,
					'parent' => 0
				));

				if (!empty($taxonomies)) : ?>
					<ul>
						<?php foreach ($taxonomies as $category) { ?>
							<li>
								<a href="<?php echo get_term_link($category->term_id, 'gallery_treatment'); ?>" data-id="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></a>
								<?php
								$taxonomies2 = get_terms(array(
									'taxonomy' => 'gallery_treatment',
									'hide_empty' => true,
									'parent' => $category->term_id
								));

								if (!empty($taxonomies2)) : ?>
									<i class="fas fa-plus"></i>
									<ul>
										<?php foreach ($taxonomies2 as $category2) : ?>
											<li><a href="<?php echo get_term_link($category2->term_id, 'gallery_treatment'); ?>"><?php echo $category2->name; ?></a></li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
							</li>
						<?php } ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
