<?php

/**
 * Display Blog Post
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Astranomial Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.astranomicals.com/
 * @since      1.0.0
 */

$youtube_id = get_field('youtube_id');
$cat = get_the_category();
$count = count($cat);
$counter = 1;
?>
<article class="post" id="post-<?php the_ID(); ?>">
	<?php if ($youtube_id) : ?>
		<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo $youtube_id; ?>"></iframe>
		</div>
	<?php else : ?>
		<div class="image--holder featured--image">
			<?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
		</div>
	<?php endif; ?>
	<div class="post-meta">
		<div class="date">Date Published: <?php echo get_the_date(); ?></div>
		<div class="category">Category:
			<?php foreach ($cat as $category) :
				echo '<a href="' . get_term_link($category->term_id) . '">' . $category->name . '</a>';
				if ($counter < $count) :
					echo ', ';
					$counter++;
				endif;
			endforeach; ?>
		</div>
	</div>
	<?php the_content(); ?>
</article>
