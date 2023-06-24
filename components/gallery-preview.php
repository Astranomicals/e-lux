<?php

/**
 * Display Single Gallery Preview
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Astranomial Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.astranomicals.com/
 * @since      1.0.0
 */

global $post;
global $gallerycount;
$before = get_field('result_before');
$after = get_field('result_after');
?>
<article class="gallery__item" id="post-<?php the_ID(); ?>">
	<div class="image--holder">
		<?php display_image($before, 'full'); ?>
		<?php if ($after) : ?>
			<?php display_image($after, 'full'); ?>
		<?php endif; ?>
	</div>
</article>
