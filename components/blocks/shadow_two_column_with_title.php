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

$title = get_sub_field('title');
$column_1 = get_sub_field('column_1');
$column_2 = get_sub_field('column_2');
?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<h2><?php echo $title; ?></h2>
			<div class="content--info">
				<div class="content">
					<?php echo $column_1; ?>
				</div>
				<div class="info">
					<?php echo $column_2; ?>
				</div>
			</div>
		</div>
	</div>
</div>
