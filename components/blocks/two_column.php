<?php

/**
 * Display Two Columns Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Astranomial Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.astranomicals.com/
 * @since      1.0.0
 */

$heading = get_sub_field('heading');
$content_right = get_sub_field('content_right');
$content_left = get_sub_field('content_left');
?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 top--content">
			<?php echo $heading; ?>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-6 col-12 pr col-md-6">
			<?php echo $content_left; ?>
		</div>
		<div class="col-xl-6 col-12 pl col-md-6">
			<?php echo $content_right; ?>
		</div>
	</div>
</div>
