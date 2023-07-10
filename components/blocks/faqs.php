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

?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10 col-12">
			<?php echo get_sub_field('content'); ?>
			<?php if (have_rows('faqs')) : ?>
				<div class="faqs">
					<?php while (have_rows('faqs')) : the_row();
						if (get_row_layout() == 'single_faq') :
					?>
							<div class="faq">
								<h3><?php echo get_sub_field('question'); ?></h3>
								<div class="answer">
									<?php echo get_sub_field('answer'); ?>
								</div>
							</div>
					<?php
						endif;
					endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
