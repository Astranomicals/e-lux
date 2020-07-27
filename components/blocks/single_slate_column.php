<?php
/**
 * Display Single Slate Column
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$content = get_sub_field( 'content_top' );
?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-xl-8 col-md-10 col-12 px-0">
			<?php echo $content; ?>
		</div>
	</div>
</div>
