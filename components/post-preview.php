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
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail('blog_thumb'); ?>
		</a>
	<?php endif; ?>
	<div class="content--area">
		<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf('Permanent Link to %s', the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
		<hr />
		<p><?php echo esc_attr(get_the_excerpt()); ?></p>
		<a class="btn btn--primary" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf('Permanent Link to %s', the_title_attribute('echo=0')); ?>">Read Full Article</a>
	</div>
</article>
