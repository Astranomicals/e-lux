<?php

/**
 * Display Single Post Navigation
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$newer_link = get_next_post_link('%link', 'NEXT');
$older_link = get_previous_post_link('%link', 'PREVIOUS');
?>

<?php if ($older_link || $newer_link) : ?>
	<nav class="d-flex align-items-center navigation navigation-single">
		<div class="prev-post">
			<?php echo $older_link; ?>
			<?php
			$prev_post = get_previous_post();
			if (!empty($prev_post)) : ?>
				<div class="post-container">
					<div class="title">
						<?php echo apply_filters('the_title', $prev_post->post_title); ?>
					</div>
					<?php echo get_the_post_thumbnail($prev_post->ID, 'medium'); ?>
				</div>
			<?php endif; ?>
		</div>
		<div class="next-post">
			<?php echo $newer_link; ?>
			<?php
			$prev_post = get_next_post();
			if (!empty($prev_post)) : ?>
				<div class="post-container">
					<div class="title">
						<?php echo apply_filters('the_title', $prev_post->post_title); ?>
					</div>
					<?php echo get_the_post_thumbnail($prev_post->ID, 'medium'); ?>
				</div>
			<?php endif; ?>
		</div>
	</nav>
<?php endif; ?>
