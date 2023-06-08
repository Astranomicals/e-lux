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
$content = get_sub_field('content');
$pages = get_sub_field('pages');
?>

<div class="container">
	<div class="row align-items-center">
		<div class="col-xl-3">
			<?php echo $content; ?>
		</div>
		<div class="col-xl-9">
			<?php if ($pages) : ?>
				<div class="swiper-container services--container">
					<div class="swiper-wrapper">
						<?php foreach ($pages as $post) : ?>
							<?php setup_postdata($post); ?>
							<div class="swiper-slide">
								<article class="post--square">
									<div class="image--holder">
										<?php echo get_the_post_thumbnail($post, 'services_thumb'); ?>
									</div>
									<div class="content">
										<h3><?php echo get_the_title(); ?></h3>
										<?php echo get_field('homepage_excerpt'); ?>
										<a href="<?php echo get_the_permalink(); ?>" class="btn--link"><i class="far fa-long-arrow-right"></i></a>
									</div>
								</article>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</div>
</div>
