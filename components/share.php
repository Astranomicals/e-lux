<?php

/**
 * Display Share for Posts
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

global $wp;
$current_url = home_url($wp->request);
$title = urlencode(get_the_title());
$image = get_the_post_thumbnail_url($post->ID);
?>
<div class="share-post">
	<span class="share-title">Share Post</span>
	<ul class="menu-social-icons">
		<li>
			<a href="https://twitter.com/share?url=<?php echo $current_url; ?>&amp;text=<?php echo $title; ?>" class="title-toolip" title="Twitter" target="_blank">
				<i class="fab fa-twitter"></i>
			</a>
		</li>

		<li>
			<a href="http://www.facebook.com/sharer.php?u=<?php echo $current_url; ?>" class="title-toolip" title="Facebook" target="_blank">
				<i class="fab fa-facebook-f"></i>
			</a>
		</li>

		<li>
			<a href="http://pinterest.com/pin/create/button/?url=<?php echo $current_url; ?>&amp;media=<?php echo $image; ?>&amp;description=<?php echo $title; ?>" class="title-toolip" title="Pinterest" target="_blank">
				<i class="fab fa-pinterest-p"></i>
			</a>
		</li>

		<li>
			<a href="mailto:enteryour@addresshere.com?subject=<?php echo $title; ?>&amp;body=Check%20this%20out:%20<?php echo $current_url; ?>" class="title-toolip" title="Mail to friend" target="_blank">
				<i class="fas fa-envelope-open"></i>
			</a>
		</li>
	</ul>
</div>
