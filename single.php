<?php
/**
 * Single.php
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
<section class="block block--full_width_page_header">
	<?php get_template_part( 'components/blocks/full_width_page_header' ); ?>
</section>
<section class="block block--meta-info">
	<div class="container">
		<div class="col-xl-10">
			<h6>Published on <?php echo get_the_date( 'F j, Y' ); ?></h6> | 
		</div>
	</div>
</section>
<section class="block block--blog-single">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-xl-8">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : ?>
						<?php the_post(); ?>
						<?php get_template_part( 'components/post' ); ?>
					<?php endwhile; ?> 
					<?php get_template_part( 'components/navigation-single' ); ?>
				<?php else : ?>
					<?php get_template_part( 'components/post-not-found' ); ?>
				<?php endif; ?>
			</div>
			<div class="col-xl-4">
				<?php get_sidebar( 'blog' ); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
