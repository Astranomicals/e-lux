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
	<div class="image--holder">
		<?php the_post_thumbnail('main_blog_thumb'); ?>
	</div>
	<div class="content--area">
		<div class="post-meta">
			<div class="date"><?php echo get_the_date(); ?></div>
		</div>
		<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf('Permanent Link to %s', the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>
		<?php echo the_excerpt(); ?>
		<a href="<?php echo get_the_permalink(); ?>" class="btn btn--primary">Read Blog</a>
	</div>
</article>
