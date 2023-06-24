<?php

/**
 * Display Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Astranomial Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.astranomicals.com/
 * @since      1.0.0
 */
$before_1 = get_sub_field('before_1');
$before_2 = get_sub_field('before_2');
$after_1 = get_sub_field('after_1');
$after_2 = get_sub_field('after_2');
?>

<div class="container-fluid">
	<div class="row align-items-center">
		<div class="col-lg-4">
			<div class="ba--holder">
				<div class="image--up">
					<?php display_image($before_1, 'ba_thumb'); ?>
				</div>
				<div class="image--down">
					<?php display_image($after_1, 'ba_thumb'); ?>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="circle">
				<?php get_template_part('components/svg/logo-icon'); ?>
				<h2>Before <span>&</span> After</h2>
				<a href="/results/" class="btn btn--primary">View Photo Results Gallery</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="ba--holder ba--holder-2">
				<div class="image--down">
					<?php display_image($before_2, 'ba_thumb'); ?>
				</div>
				<div class="image--up">
					<?php display_image($after_2, 'ba_thumb'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
