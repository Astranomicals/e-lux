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

?>
<article class="post" id="post-<?php the_ID(); ?>">
	<div class="post-meta">
		<div class="date"><?php echo get_the_date(); ?></div>
	</div>
	<?php the_content(); ?>
</article>
