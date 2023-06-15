<?php

/**
 * Single
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

get_header(); ?>
<section class="block block--blog-single">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10">
				<div class="top--image">
					<?php echo get_the_post_thumbnail($post->ID, 'large_top_thumb'); ?>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-8">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : ?>
						<?php the_post(); ?>
						<?php get_template_part('components/post'); ?>
					<?php endwhile; ?>
				<?php else : ?>
					<?php get_template_part('components/post-not-found'); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	</div>
</section>
<section class="block block--related-posts">
	<?php get_template_part('components/svg/bottom-svg'); ?>
	<?php get_template_part('components/related-posts'); ?>
</section>

<?php get_footer(); ?>
