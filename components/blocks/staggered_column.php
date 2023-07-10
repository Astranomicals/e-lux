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

$background_image = get_sub_field('background_image');
?>
<div class="background--image">
	<?php display_image($background_image, 'full'); ?>
</div>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-xxxl-11 col-12">
			<?php if (have_rows('content_holder')) : ?>
				<div class="grid--content">
					<?php while (have_rows('content_holder')) : the_row(); ?>
						<?php if (get_row_layout() == 'single_content') : ?>
							<?php
							$title = get_sub_field('title');
							$content = get_sub_field('content');
							$page_link = get_sub_field('page_link');
							$link_text = get_sub_field('link_text');
							?>
							<div class="single--content">
								<h2><?php echo $title; ?></h2>
								<?php echo $content; ?>
								<?php if ($page_link) : ?>
									<a href="<?php echo $page_link; ?>" class="btn btn--primary"><?php echo $link_text; ?></a>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
