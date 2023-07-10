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
$side_image = get_sub_field('side_image');
?>

<div class="side--image">
	<?php display_image($side_image, 'full'); ?>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-10">
			<?php echo $content; ?>
		</div>
	</div>
</div>
