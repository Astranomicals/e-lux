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
$image = get_sub_field('image');
?>
<div class="side--image">
	<?php display_image($image, 'top_header_thumb'); ?>
</div>
<div class="container">
	<div class="col-xl-6">
		<?php echo $content; ?>
		<a href="#" class="btn btn--primary">Request a Consultation</a>
	</div>
</div>
<?php get_template_part('components/svg/top-double-curve'); ?>
