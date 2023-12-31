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
	<?php wp_head(); ?>
	<?php if (have_rows('blocks')) :
		while (have_rows('blocks')) :
			the_row();
			$faqs = get_sub_field('faqs');
			if (have_rows('faqs')) :
				echo '<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [';
				while (have_rows('faqs')) : the_row();
					$count = count($faqs);
					if (get_row_layout() == 'faq') :
						echo '{
								"@type": "Question",
								"name": "' . get_sub_field('question') . '",
								"acceptedAnswer": {
									"@type": "Answer",
									"text": "' . get_sub_field('answer') . '"
								}
							}';
						if (get_row_index() !== $count) :
							echo ',';
						endif;
					endif;
				endwhile;
				echo ']
    }
    </script>';
			endif;
		endwhile;
	endif;
	?>
</head>

<body <?php body_class(); ?>>

	<div class="site-wrap">
		<?php get_template_part('components/mobile-menu'); ?>
		<?php get_template_part('components/site-nav'); ?>

		<?php if (!is_front_page() && !is_singular('product')) : ?>
			<?php get_template_part('components/page-header'); ?>
		<?php endif; ?>
