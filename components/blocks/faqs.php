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

?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="faq--block">
				<h2>Frequently Asked Questions</h2>
				<?php if (have_rows('faq_block')) : ?>
					<?php while (have_rows('faq_block')) : the_row();
						if (get_row_layout() == 'single_faq') :
					?>
							<div class="faq--single">
								<div class="question">
									<?php echo get_sub_field('question'); ?>
								</div>
								<div class="answer">
									<?php echo get_sub_field('answer'); ?>
								</div>
							</div>
					<?php
						endif;
					endwhile;
					?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
