<?php

/**
 * Header
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

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="preload" href="/wp-content/themes/incredible/assets/dist/webfonts/fa-light-300.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="/wp-content/themes/incredible/assets/dist/webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="/wp-content/themes/incredible/assets/dist/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
	<?php wp_head(); ?>
	<?php echo get_field('header_scripts', 'options'); ?>
</head>

<body <?php body_class(); ?>>

	<div class="site-wrap">
		<?php get_template_part('components/mobile-menu'); ?>
		<?php get_template_part('components/site-nav'); ?>

		<?php if (!is_front_page()) : ?>
			<?php get_template_part('components/page-header'); ?>
		<?php endif; ?>
