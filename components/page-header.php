<?php

/**
 * Display Page Header
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$postid           = get_the_id();
$page_title       = get_the_title($postid);
$background_image = get_field('page_header_background_image', $postid) ?: get_field('header_image', 'options');

if (is_singular('team_member')) {
	$page_title = 'Staff';
}
if (is_home()) :
	$background_image = get_field('blog_header_image', 'options');
elseif (is_singular('gallery') || is_post_type_archive('gallery')) :
	$background_image = get_field('gallery_header_image', 'options');
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
		<div class="row">
			<div class="col-12">
				<h1>
					<?php if (is_home()) : ?>
						Blog
					<?php elseif (is_category()) : ?>
						Category<br><small><?php single_cat_title(); ?></small>
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
			</div>
		</div>
	</div>
	<?php get_template_part('components/svg/page-header-curve'); ?>
</header>
