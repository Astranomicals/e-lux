<?php
/**
 * Display Complex Gray Box
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$bottom_left_content  = get_sub_field( 'bottom_left_content' );
$bottom_right_content = get_sub_field( 'bottom_right_content' );
$left_content         = get_sub_field( 'left_content' );
$right_content        = get_sub_field( 'right_content' );
?>

<div class="container">
	<div class="row">
		<div class="col-xl-6 pr-4">
			<?php echo $left_content; ?>
		</div>
		<div class="col-xl-6 pl-4">
				<?php echo $right_content; ?>
		</div>
		<div class="col-12">
			<hr/>
		</div>
		<div class="col-xl-6 pr-4">
			<?php echo $bottom_left_content; ?>
		</div>
		<div class="col-xl-6 pl-4">
			<?php echo $bottom_right_content; ?>
		</div>
	</div>
</div>
