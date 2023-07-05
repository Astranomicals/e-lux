<?php

/**
 * Display Page Header
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Astranomial Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.astranomicals.com/
 * @since      1.0.0
 */

$postid           = get_the_id();
$page_title       = get_the_title($postid);
$background_image = get_field('page_header_background_image', $postid) ?: get_field('default_image', 'options');

if (is_home()) :
	$background_image = get_field('default_image', 'options');
elseif (is_tax('product_cat')) :
	$background_image = get_field('cruisers_archive', 'options');
elseif (is_singular('testimonial') || is_post_type_archive('testimonial')) :
	$background_image = get_field('testimonial_header_image', 'options');
endif;
?>

<header id="header" class="page--header">
	<?php if ($background_image) : ?>
		<div class="background--image">
			<?php echo wp_get_attachment_image($background_image['id'], 'hero', '', ''); ?>
		</div>
	<?php endif; ?>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-xl-10">
				<h1>
					<?php if (is_home()) : ?>
						Your Electric Bike Blog
					<?php elseif (is_category()) : ?>
						<?php single_cat_title(); ?>
					<?php elseif (is_tax('product_cat')) : ?>
						<?php single_cat_title(); ?>
					<?php elseif (is_archive()) : ?>
						<?php post_type_archive_title(''); ?>
					<?php elseif (is_search()) : ?>
						Search<br><small>
							<?php
							$allsearch = new WP_Query("s=$s&showposts=-1");
							$key       = esc_attr($s);
							$count     = $allsearch->post_count;
							echo esc_attr($count) . ' ';
							_esc_html('results for ', 'incredible');
							_esc_html('<span class="post-search-terms">', 'incredible');
							echo '&ldquo;';
							echo esc_attr($key);
							echo '&rdquo;';
							_esc_html('</span><!-- end of .post-search-terms -->', 'incredible');
							wp_reset_postdata();
							?>
						</small>
					<?php else : ?>
						<?php the_title(); ?>
					<?php endif; ?>
				</h1>
				<?php if (is_tax('product_cat')) : ?>
					<?php if (get_field('cruisers_headline', 'options')) : ?>
						<p><?php echo get_field('cruisers_headline', 'options'); ?></p>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</header>
