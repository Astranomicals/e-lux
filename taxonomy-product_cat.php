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
