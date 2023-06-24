<?php

/**
 * Sidebar Blog
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
<aside class="sidebar sidebar-blog">
	<?php if (is_active_sidebar('sidebar_blog')) : ?>
		<div class="inner--sidebar">
			<?php dynamic_sidebar('sidebar_blog'); ?>
		</div>
	<?php endif; ?>
</aside>
