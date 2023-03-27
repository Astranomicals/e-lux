<?php

/**
 * Display Blog Post
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

?>
<article class="post" id="post-<?php the_ID(); ?>">
	<?php if (has_post_thumbnail()) : ?>
		<div class="image--holder">
			<?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
		</div>
	<?php endif; ?>
	<div class="categories">
		<?php
		$categories = get_the_category();
		$output     = array();
		foreach ($categories as $category) {
			$category_link = get_category_link($category->ID);
			$output[]      = '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
		}
		echo implode(', ', $output);
		?>
	</div>
	<h2 class="post-title"><?php the_title(); ?></h2>
	<div class="post-meta">
		<div class="date">
			<?php echo get_the_date(); ?> at <?php echo get_the_time(); ?>
		</div>
		<div class="by">by</div>
		<div class="author">
			<?php echo get_the_author(); ?>
		</div>
	</div>
	<?php the_content(); ?>
</article>
