<?php
/**
 * Display Complex Blue Box
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$top_content   = get_sub_field( 'content_top' );
$left_content  = get_sub_field( 'content_left' );
$right_content = get_sub_field( 'content_right' );
?>

<div class="container">
	<div class="row">
		<div class="col-12 top--content">
			<?php echo $top_content; ?>
		</div>
		<div class="col-xl-6 pr-4">
			<?php echo $left_content; ?>
		</div>
		<div class="col-xl-6 pl-4">
				<?php echo $right_content; ?>
		</div>
	</div>
</div>
