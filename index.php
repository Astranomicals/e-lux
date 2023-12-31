<?php

/**
 * Index
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Astranomial Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.astranomicals.com/
 * @since      1.0.0
 */
$post_id = get_queried_object_id();
//$post_id = get_option( 'page_for_posts' ); // you should use the above on the blog page
$content = get_the_content(null, false, $post_id);
get_header(); ?>

<section class="block block--blog-posts">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>E-bike Tips, Advice, and Knowledge Videos</h2>
				<p>JP enjoys sharing his knowledge and experience from a decade in the business to help educate you and others about Electric Bikes.</p>
				<?php if (is_active_sidebar('sidebar_blog')) : ?>
					<div class="inner--sidebar">
						<?php dynamic_sidebar('sidebar_blog'); ?>
					</div>
				<?php endif; ?>
				<?php if (have_posts()) : ?>
					<div class="grid--posts">
						<?php while (have_posts()) : ?>
							<?php the_post(); ?>
							<?php get_template_part('components/post-preview'); ?>
						<?php endwhile; ?>
					</div>
					<?php astra_numeric_posts_nav(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
