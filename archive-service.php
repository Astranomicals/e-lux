<?php

/**
 * Archive What We Treat
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */
$contact_link = get_field('contact_link', 'options');
$service_content = get_field('service_content', 'options');
$service_image = get_field('service_image', 'options');
get_header(); ?>

<section class="block block--top-header">
	<div class="side--image">
		<?php display_image($service_image, 'top_header_thumb'); ?>
	</div>
	<div class="container">
		<div class="col-md-6">
			<?php echo $service_content; ?>
			<a href="<?php echo $contact_link; ?>" class="btn btn--primary" target="_blank">Request a Consultation</a>
		</div>
	</div>
</section>

<section class="block block--archive-squares">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php if (have_posts()) : ?>
					<div class="square--grid-large">
						<?php while (have_posts()) : ?>
							<?php the_post(); ?>
							<?php $this_ID = $post->ID; ?>
							<?php get_template_part('components/services-large'); ?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
