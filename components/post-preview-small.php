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

?>
<article class="post-preview" id="post-<?php the_ID(); ?>">
	<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf('Permanent Link to %s', the_title_attribute('echo=0')); ?>">
		<div class="image--holder">
			<?php the_post_thumbnail('services_thumb'); ?>
		</div>
		<div class="content--area">
			<h3><?php the_title(); ?></h3>
			<div class="post-meta">
				<div class="date"><?php echo get_the_date(); ?></div>
			</div>
		</div>
	</a>
</article>
