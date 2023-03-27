<?php

/**
 * Display Related Posts in a Swiper Slider
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$categories = get_the_category();
$category_id = $categories[0]->cat_ID;
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 8,
);
$the_query = new WP_Query($args);
?>

<?php if ($the_query->have_posts()) : ?>
	<div class="posts--related">
		<div class="top--slider">
			<h3>Related Posts</h3>
			<hr>
			<?php get_template_part('components/swiper-nav'); ?>
		</div>
		<div class="swiper-container related-slider">
			<div class="swiper-wrapper">
				<?php while ($the_query->have_posts()) : ?>
					<?php $the_query->the_post(); ?>
					<div class="swiper-slide">
						<?php get_template_part('components/post-preview'); ?>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
<?php endif; ?>
