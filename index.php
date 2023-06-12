<?php

/**
 * Index
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
<section class="block block--blog-archive">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="top--blog">
					<div class="left--blog">
						<p>Filter by: </p>
						<?php get_sidebar('blog'); ?>
					</div>
					<?php echo do_shortcode('[gravityforms id="2" title="false" description="false" ajax="true"]'); ?>
				</div>
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : ?>
						<?php the_post(); ?>
						<?php get_template_part('components/post-preview'); ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
