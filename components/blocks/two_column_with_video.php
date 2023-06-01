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

$image = get_sub_field('image');
$content = get_sub_field('content');
?>

<div class="container">
	<div class="row align-items-center">
		<div class="col-xl-6 col-md-6">
			<div class="section--holder">
				<div class="image--holder">
					<?php display_image($image, 'full'); ?>
				</div>
				<a href="" class="btn--play"><i class="far fa-play"></i></a>
			</div>
		</div>
		<div class="col-xl-6 col-md-6">
			<?php echo $content; ?>
		</div>
	</div>
</div>
