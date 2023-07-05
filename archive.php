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
$content = get_the_content(null, false, 194);
get_header(); ?>
<section class="block block--blog">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-xl-8 col-md-10">
				<?php echo $content; ?>
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Vq63UsXftgI?rel=0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>
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
