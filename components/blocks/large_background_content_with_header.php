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
$top_header = get_sub_field('top_header');
$content = get_sub_field('content');
$background_image = get_sub_field('background_image');
?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="top--content">
				<?php echo $top_header; ?>
			</div>
		</div>
	</div>
</div>
</section>
<section class="block block--background">
	<div class="background--image">
		<?php display_image($background_image, 'full'); ?>
	</div>
	<div class="container">
		<div class="row justify-content-end">
			<div class="col-xl-5">
				<div class="circle">
					<?php echo $content; ?>
				</div>
			</div>
		</div>
	</div>
	<?php get_template_part('components/svg/bottom-svg'); ?>
</section>
