<?php

/**
 * Display Blog Post Preview
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
?>
<article class="post-preview" id="post-<?php the_ID(); ?>">
	<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf('Permanent Link to %s', the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>
	<?php echo the_excerpt(); ?>
	<div class="flex--buttons">
		<a href="<?php echo get_the_permalink(); ?>" class="btn btn--primary">Read More</a>
		<?php if ($youtube_id) : ?>
			<a href="http://www.youtube.com/watch?v=<?php echo $youtube_id; ?>" class="btn btn--primary btn--play">View Video <i class="fas fa-play"></i></a>
		<?php endif; ?>
	</div>
</article>
