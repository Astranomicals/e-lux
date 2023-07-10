<?php

/**
 * Display Site Nav
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Astranomial Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.astranomicals.com/
 * @since      1.0.0
 */

$contact_link = get_field('contact_link', 'options');
?>

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

					<?php
					$args = array(
						'theme_location' => 'cart-menu',
						'container'      => false,
						'menu_class'     => 'menu top-menu',
					);
					wp_nav_menu($args);
					?>

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
<?php if (is_singular('product') && (!has_term('accessories', 'product_cat', $post->ID))) : ?>
	<div class="bike--main">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="flex--header">
						<h5><?php echo get_the_title(); ?></h5>
						<ul class="menu">
							<li><a href="#overview" class="js-scroll-to">Overview</a></li>
							<li><a href="#" class="btn-specs">Specs / Details</a></li>
						</ul>
						<a href="#buy-now" class="btn btn--primary js-scroll-to">Buy Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
