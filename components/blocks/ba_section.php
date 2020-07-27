<?php
/**
 * Display BA Section
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$ba_link          = get_sub_field( 'ba_link' );
?>


<div class="image--holder">
	<img src="/wp-content/uploads/2020/07/ba-mommy-makeover.png" alt="Gallery Default Image" />
</div>

<div class="container">
	<div class="row">
		<div class="col-xxl-5 offset-xxl-6 col-xl-6 offset-xl-5 col-md-6 offset-md-6 px-0">
			<h2>Before <strong>&</strong> After</h2>
			<h5>Photo Gallery</h5>
			<a href="<?php echo $ba_link; ?>" class="btn btn--primary">Enter Gallery</a>
		</div>
	</div>
</div>
