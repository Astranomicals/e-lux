<?php

/**
 * Display Two Columns Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$heading = get_sub_field('heading');
$content = get_sub_field('content');
$image = get_sub_field('image');

?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-xl-5 col-12">
			<h2><?php echo $heading; ?></h2>
			<?php echo $content; ?>
		</div>
		<div class="col-xl-5 col-12">
			<div class="image--holder">
				<?php display_image($image, 'full'); ?>
			</div>
		</div>
	</div>
</div>
