<?php
/**
 * Single Surgeon
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
<section class="block block--staff-single">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-xl-8 col-lg-10">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : ?>
						<?php the_post(); ?>
						<div class="image--holder">
							<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
						</div>
						<h3><?php echo esc_attr( get_field( 'position' ) ); ?></h3>
						<?php the_content(); ?>
					<?php endwhile; ?> 
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
