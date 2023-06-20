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
$contact_link = get_field('contact_link', 'options');
$content = get_sub_field('content');
$image = get_sub_field('image');
$page_link = get_sub_field('page_link');
$link_text = get_sub_field('link_text');
?>
<div class="side--image">
	<?php display_image($image, 'top_header_thumb'); ?>
</div>
<div class="container">
	<div class="col-md-6">
		<?php echo $content; ?>
		<?php if ($page_link) : ?>
			<a href="<?php echo $page_link; ?>" class="btn btn--primary" target="_blank"><?php echo $link_text; ?></a>
		<?php else : ?>
			<a href="<?php echo $contact_link; ?>" class="btn btn--primary" target="_blank">Request a Consultation</a>
		<?php endif; ?>
	</div>
</div>
<?php get_template_part('components/svg/top-double-curve'); ?>
