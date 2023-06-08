<?php

/**
 * Display Blog Post Preview
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

global $this_ID;

$args = array(
	'post_type' => 'service',
	'posts_per_page' => -1,
	'order'	=> 'ASC',
	'orderby' => 'menu_order',
	'post_parent'	=> $this_ID,
);
$query = new WP_Query($args);
?>
<article class="post-preview" id="post-<?php the_ID(); ?>">
	<div class="image--holder">
		<?php the_post_thumbnail('large_square_thumb'); ?>
		<?php if ($query->have_posts()) : ?>
			<ul class="page-links">
				<?php while ($query->have_posts()) : ?>
					<?php $query->the_post(); ?>
					<li><a href="<?php echo get_the_permalink(); ?>" class="btn btn--secondary"><?php echo get_the_title(); ?></a></li>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</ul>
		<?php endif; ?>
	</div>
	<div class="bottom--title">
		<h2><?php echo get_the_title($this_ID); ?></h2>
		<a href="/contact/" class="btn btn--primary">Request a Consultation</a>
	</div>
</article>
