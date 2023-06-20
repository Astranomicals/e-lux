<?php

/**
 * Archive Gallery Treatment
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


<section class="block block--gallery-squares">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php if (have_posts()) : ?>
					<div class="square--grid">
						<?php while (have_posts()) : ?>
							<?php the_post(); ?>
							<?php $this_ID = $post->ID; ?>
							<?php get_template_part('components/gallery-preview'); ?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
