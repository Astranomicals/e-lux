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

?>
<article class="post-preview" id="post-<?php the_ID(); ?>">
	<?php if (has_post_thumbnail()) : ?>
		<div class="image--holder">
			<?php the_post_thumbnail('large'); ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn--primary">Read Article</a>
		</div>
	<?php endif; ?>
	<div class="content--area">
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
		<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf('Permanent Link to %s', the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>
		<div class="post-meta">
			<div class="date">
				<?php echo get_the_date(); ?> at <?php echo get_the_time(); ?>
			</div> by
			<div class="author">
				<?php echo get_the_author(); ?>
			</div>
		</div>
		<p><?php echo get_the_excerpt(); ?></p>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn--primary">Read Article <i class="fas fa-chevron-right"></i></a>
	</div>
</article>
