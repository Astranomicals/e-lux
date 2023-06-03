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
	<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf('Permanent Link to %s', the_title_attribute('echo=0')); ?>">
		<?php if (has_post_thumbnail()) : ?>
			<div class="image--holder">
				<?php the_post_thumbnail('square_thumb'); ?>
			</div>
		<?php endif; ?>
		<div class="content--area">
			<h3><?php echo get_the_title(); ?></h3>
		</div>
	</a>
</article>
