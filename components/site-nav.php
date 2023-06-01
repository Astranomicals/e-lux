<?php

/**
 * Display Site Nav
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

<div class="top--header">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="flex--header">
					<p>5.0 <?php get_template_part('components/svg/star'); ?> See Our Review</p>

					<div class="right--top-menu">
						<?php
						$args = array(
							'theme_location' => 'header-top-menu',
							'container'      => false,
							'menu_class'     => 'menu',
						);
						wp_nav_menu($args);
						?>
						<?php get_template_part('components/call'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<nav class="site-nav">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="flex--header">
					<a title="<?php echo esc_attr(get_bloginfo()); ?>" class="logo" href="<?php echo esc_url(home_url('/')); ?>">
						<?php get_template_part('components/svg/logo'); ?>
					</a>

					<?php
					$args = array(
						'theme_location' => 'header-menu',
						'container'      => false,
						'menu_class'     => 'menu',
					);
					wp_nav_menu($args);
					?>

					<a href="#" class="btn btn--primary">Book Now</a>
					<button data-toggle="menu" aria-label="Menu Open">
						<span></span>
						<span></span>
						<span></span>
					</button>
				</div>
			</div>
		</div>
	</div>
</nav>
