<?php

/**
 * Single Surgeon
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Astranomial Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.astranomicals.com/
 * @since      1.0.0
 */

get_header(); ?>
<section class="block block--top-header block--top-header-staff">
	<div class="container">
		<div class="row flex-row-reverse">
			<div class="col-md-6">
				<div class="image--holder">
					<?php echo get_the_post_thumbnail($post->ID, 'team_single_thumb'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<h3><?php echo esc_attr(get_field('team_title')); ?></h3>
				<?php echo get_field('team_bio'); ?>
				<a href="/our-team/" class="btn btn--primary">Back to Team Page</a>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
