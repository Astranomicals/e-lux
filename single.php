<?php

/**
 * Single
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
<section class="block block--blog-single">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : ?>
						<?php the_post(); ?>
						<?php get_template_part('components/post'); ?>
						<?php get_template_part('components/share'); ?>
					<?php endwhile; ?>
				<?php else : ?>
					<?php get_template_part('components/post-not-found'); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	</div>
</section>

<?php get_footer(); ?>
