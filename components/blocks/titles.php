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
?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-xl-11 col-12">
			<h2><?php echo $title; ?></h2>
		</div>
		<div class="col-12">
			<?php if (have_rows('tiles')) : ?>
				<div class="tile--container">
					<?php while (have_rows('tiles')) : the_row(); ?>
						<?php if (get_row_layout() == 'single_tile') : ?>
							<?php $detail_title = get_sub_field('title'); ?>
							<?php $content = get_sub_field('content'); ?>
							<div class="single--tile">
								<h3><?php echo $detail_title; ?></h3>
								<?php echo $content; ?>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
					<div class="single--tile request-tile">
						<a href="/contact/">Request a Consultation</a>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
