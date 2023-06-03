<?php

/**
 * Display Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */
$content = get_sub_field('content');
?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<?php echo $content; ?>
			<?php
			$args = array(
				'post_type' => 'team_members',
				'posts_per_page' => -1,
				'order'	=> 'ASC',
				'orderby' => 'menu_order'
			);
			$query = new WP_Query($args);

			if ($query->have_posts()) :
			?>
				<div class="team--grid">
					<?php
					while ($query->have_posts()) :
						$query->the_post();
					?>
						<article class="post--square">
							<div class="image--holder">
								<?php echo get_the_post_thumbnail($post->ID, 'team_thumb'); ?>
							</div>
							<div class="content">
								<h3><?php echo get_the_title(); ?></h3>
								<p><?php echo get_field('team_position'); ?></p>
							</div>
						</article>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
