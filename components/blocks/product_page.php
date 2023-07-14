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

<div id="overview"></div>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-xl-5 col-md-6 col-12 mb-testimonial">
			<div class="single--testimonial">
				<?php echo get_sub_field('testimonial_content'); ?>
			</div>
		</div>
		<div class="col-xl-5 col-md-6 col-12">
			<div class="single--testimonial">
				<?php echo get_sub_field('testimonial_content_2'); ?>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-xl-5 col-md-6 col-12 mb-testimonial">
			<h2><?php echo get_sub_field('header'); ?></h2>
		</div>
		<div class="col-xl-5 col-md-6 col-12">
			<?php echo get_sub_field('content'); ?>
		</div>
	</div>
</div>
</section>
<section class="block block--cruiser-fit">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>Fit Your Cruiser</h2>
				<div class="cruiser--area">
					<div class="image--holder">
						<?php $bike_image = get_sub_field('bike_image'); ?>
						<div class="bike--image">
							<?php display_image($bike_image, 'full'); ?>
						</div>
						<?php if (have_rows('cruiser_height')) :
							$counter = 1;
							while (have_rows('cruiser_height')) : the_row();
								if (get_row_layout() == 'single_height') :
									$person_image = get_sub_field('person_image');
						?>
									<div class="image" data-id="<?php echo $counter; ?>">
										<?php if ($person_image) : ?>
											<?php display_image($person_image, 'full'); ?>
										<?php endif; ?>
									</div>
						<?php endif;
								$counter++;
							endwhile;
						endif;
						?>
					</div>
					<div class="measure--height">
						<?php if (have_rows('cruiser_height')) :
							$counter2 = 1;
							while (have_rows('cruiser_height')) : the_row();
								if (get_row_layout() == 'single_height') :
						?>
									<div class="height--single" data-id="<?php echo $counter2; ?>">
										<div class="title">
											<h6><?php echo get_sub_field('height'); ?></h6>
										</div>
										<div class="description">
											<h3>Height: <?php echo get_sub_field('height'); ?></h3>
											<?php echo get_sub_field('height_description'); ?>
										</div>
									</div>
						<?php
								endif;
								$counter2++;
							endwhile;
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="block block--icons">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="grid--icons">
					<?php if (have_rows('three_icons')) :
						while (have_rows('three_icons')) : the_row();
							if (get_row_layout() == 'single_icon') :
								$icon = get_sub_field('font_awesome_symbol');
								$description = get_sub_field('description');
					?>
								<div class="icons">
									<?php echo $icon; ?>
									<p><?php echo $description; ?></p>
								</div>
					<?php
							endif;
						endwhile;
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $details_image = get_sub_field('details_image'); ?>
<section class="block block--details">
	<div class="container">
		<div class="col-12">
			<div class="top--header">
				<h2 class="large"><?php echo get_sub_field('details_title'); ?></h2>
				<a href="<?php echo get_sub_field('other_option_link'); ?>" class="btn btn--primary"><?php echo get_sub_field('other_option_link_text'); ?></a>
			</div>
			<div class="svg--holder">
				<?php display_image($details_image, 'full'); ?>
			</div>
		</div>
	</div>
	<a href="#" class="btn btn--primary btn--floater btn-specs">View All Details</a>
	<div id="specs" class="details--popup">
		<div class="details--background"></div>
		<div class="content">
			<div class="close">X</div>
			<div class="spec--list">
				<?php if (have_rows('specs_list')) :
					while (have_rows('specs_list')) : the_row();
						if (get_row_layout() == 'single_spec') :
				?>
							<div class="spec--single">
								<h4><?php echo get_sub_field('spec_title'); ?></h4>
								<?php echo get_sub_field('spec_description'); ?>
							</div>
				<?php
						endif;
					endwhile;
				endif;
				?>
			</div>
		</div>
	</div>
</section>
<?php $lifestyle_image = get_sub_field('lifestyle_image'); ?>
<section class="block block--lifestyle">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-xl-10">
				<h2><?php echo get_sub_field('lifestyle_heading'); ?></h2>
				<div class="content--area">
					<div class="image--holder">
						<?php if ($lifestyle_image) : ?>
							<?php display_image($lifestyle_image, 'full'); ?>
						<?php else : ?>
							<img src="
data:image/png;base64,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adJVVaC65557FvVlPTZ+/vnnxccff7z48ccfJ9WsB1UQrOu99tprR5/zxx9/LD777LPFl19+ObnuhfDACsgPPPDAjrfy4osvLsPnlHHjjTcubr/99qVxb1RQqwD7wQcfLMp46pirF6a+vscRILBTQMDSEQRmFqhZioceemhx4MCBya/0ySefLL744ou1jz9y5Mji8OHDk2t++umny0C0adTMzIMPPrjpYWf+vWZcKhRuO4Mz+QX+jx5YQfmJJ55YzjgNx9SA9fDDDy9nraaM8izX8t005uqFTa/r3wkQGBcQsHQHgRkFambpkUce2SpcrS7n9ddfXy4Z9cYtt9yyuOOOO7a+8pMnTy4+//zz0efVLEiFgG3CYBWr2bHjx49vfT3/tieMBaQpAatmvWr2a9vx5ptvLmoWcmzM1QvbXqfHEyCwU0DA0hEEZhR46qmnlnuihqOWkr777rvlnqtaEqwv3fqSbB9X4apCVjtq79Zjjz121t9X3VparLAz3I/VPnBdcOtdb82krPYGXXrppcvatc+nHbUMeerUqRk1z2/pW2+9dbm01xubAtbYc+vzr8+rfKsPaj9WG27rMa+88kp3hnDOXji/2l6dwL9fQMD693+G3sH/qUDvS7W+LF977bWzNrNXuKqZrgoww/HGG28sN6sPRy3frTZYr/6+ZjhqpqMd991331n7viqEvfXWW2c9tne9Fdrqy73dfF/7iGqPVhscK2hciKNmIh999NHRt7YpYPWCa80k1oxiO2oJsg2wYzOPc/XChfgZek8EzrWAgHWuxb3evhFov1THwtUKpPcl3n6x9mYsaiP0q6++OroHqv3CrhmpCgTtnqn2euvfK+CNLVP2wtvbb7+93KB9oY0nn3xydFN6vdd1AasXXOuu0dpf1Rv1GVeYG85k1R2GFcyHY85euNA+P++HwPkQELDOh7rXvOAFrr/++sW99967433WXWFff/312vfehqH2i/jOO+9c3HzzzTtqbNqjU8tONTs2HB9++OHiq6++OvNXtexXG/GHozbZ12b7deOZZ57ZEQTWBYd1deruynZWrjZ3V711o5zr2mumrf5UKKzl17FQuJvGq8+xXmc1KtC2M0zrAlaFpeFdnnWNL7zwwtpLqaXICmbD8dJLL+2YSZyrF3Zj5DkECJwtIGDpCgIzCLRfyvXlP2X5rELG8GiECgvD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rDCocgQIECBAgAABAUsPECBAgAABAgTCAgJWGFQ5AgQIECBAgICApQcIECBAgAABAmEBASsMqhwBAgQIECBAQMDSAwQIECBAgACBsICAFQZVjgABAgQIECAgYOkBAgQIECBAgEBYQMAKgypHgAABAgQIEBCw9AABAgQIECBAICwgYIVBlSNAgAABAgQICFh6gAABAgQIECAQFhCwwqDKESBAgAABAgQELD1AgAABAgQIEAgLCFhhUOUIECBAgAABAgKWHiBAgAABAgQIhAUErDCocgQIECBAgAABAUsPECBAgAABAgTCAgJWGFQ5AgQIECBAgICApQcIECBAgAABAmEBASsMqhwBAgQIECBAQMDSAwQIECBAgACBsICAFQZVjgABAgQIECAgYOkBAgQIECBAgEBYQMAKgypHgAABAgQIEBCw9AABAgQIECBAICwgYIVBlSNAgAABAgQICFh6gAABAgQIECAQFhCwwqDKESBAgAABAgQELD1AgAABAgQIEAgLCFhhUOUIECBAgAABAgKWHiBAgAABAgQIhAUErDCocgQIECBAgAABAUsPECBAgAABAgTCAgJWGFQ5AgQIECBAgICApQcIECBAgAABAmEBASsMqhwBAgQIECBAQMDSAwQIECBAgACBsICAFQZVjgABAgQIECAgYOkBAgQIECBAgEBYQMAKgypHgAABAgQIEBCw9AABAgQIECBAICwgYIVBlSNAgAABAgQICFh6gAABAgQIECAQFhCwwqDKESBAgAABAgQELD1AgAABAgQIEAgLCFhhUOUIECBAgAABAgKWHiBAgAABAgQIhAUErDCocgQIECBAgAABAUsPECBAgAABAgTCAgJWGFQ5AgQIECBAgICApQcIECBAgAABAmEBASsMqhwBAgQIECBAQMDSAwQIECBAgACBsICAFQZVjgABAgQIECAgYOkBAgQIECBAgEBYQMAKgypHgAABAgQIEBCw9AABAgQIECBAICwgYIVBlSNAgAABAgQICFh6gAABAgQIECAQFhCwwqDKESBAgAABAgQELD1AgAABAgQIEAgLCFhhUOUIECBAgAABAgKWHiBAgAABAgQIhAUErDCocgQIECBAgAABAUsPECBAgAABAgTCAgJWGFQ5AgQIECBAgICApQcIECBAgAABAmEBASsMqhwBAgQIECBAQMDSAwQIECBAgACBsICAFQZVjgABAgQIECAgYOkBAgQIECBAgEBYQMAKgypHgAABAgQIEBCw9AABAgQIECBAICwgYIVBlSNAgAABAgQICFh6gAABAgQIECAQFhCwwqDKESBAgAABAgQELD1AgAABAgQIEAgLCFhhUOUIECBAgAABAgKWHiBAgAABAgQIhAUErDCocgQIECBAgAABAUsPECBAgAABAgTCAgJWGFQ5AgQIECBAgICApQcIECBAgAABAmEBASsMqhwBAgQIECBAQMDSAwQIECBAgACBsICAFQZVjgABAgQIECAgYOkBAgQIECBAgEBYQMAKgypHgAABAgQIEBCw9AABAgQIECBAICwgYIVBlSNAgAABAgQICFh6gAABAgQIECAQFhCwwqDKESBAgAABAgQELD1AgAABAgQIEAgLCFhhUOUIECBAgAABAgKWHiBAgAABAgQIhAUErDCocgQIECBAgAABAUsPECBAgAABAgTCAgJWGFQ5AgQIECBAgICApQcIECBAgAABAmEBASsMqhwBAgQIECBAQMDSAwQIECBAgACBsICAFQZVjgABAgQIECAgYOkBAgQIECBAgEBYQMAKgypHgAABAgQIEBCw9AABAgQIECBAICwgYIVBlSNAgAABAgQICFh6gAABAgQIECAQFhCwwqDKESBAgAABAgQELD1AgAABAgQIEAgLCFhhUOUIECBAgAABAgKWHiBAgAABAgQIhAUErDCocgQIECBAgAABAUsPECBAgAABAgTCAgJWGFQ5AgQIECBAgICApQcIECBAgAABAmEBASsMqhwBAgQIECBAQMDSAwQIECBAgACBsICAFQZVjgABAgQIECAgYOkBAgQIECBAgEBYQMAKgypHgAABAgQIEBCw9AABAgQIECBAICwgYIVBlSNAgAABAgQICFh6gAABAgQIECAQFhCwwqDKESBAgAABAgQELD1AgAABAgQIEAgLCFhhUOUIECBAgAABAgKWHiBAgAABAgQIhAUErDCocgQIECBAgAABAUsPECBAgAABAgTCAgJWGFQ5AgQIECBAgICApQcIECBAgAABAmEBASsMqhwBAgQIECBAQMDSAwQIECBAgACBsICAFQZVjgABAgQIECAgYOkBAgQIECBAgEBYQMAKgypHgAABAgQIEBCw9AABAgQIECBAICwgYIVBlSNAgAABAgQICFh6gAABAgQIECAQFhCwwqDKESBAgAABAgQELD1AgAABAgQIEAgLCFhhUOUIECBAgAABAgKWHiBAgAABAgQIhAUErDCocgQIECBAgAABAUsPECBAgAABAgTCAgJWGFQ5AgQIECBAgICApQcIECBAgAABAmEBASsMqhwBAgQIECBAQMDSAwQIECBAgACBsICAFQZVjgBpY0qkAAAA20lEQVQBAgQIECAgYOkBAgQIECBAgEBYQMAKgypHgAABAgQIEBCw9AABAgQIECBAICwgYIVBlSNAgAABAgQICFh6gAABAgQIECAQFhCwwqDKESBAgAABAgQELD1AgAABAgQIEAgLCFhhUOUIECBAgAABAgKWHiBAgAABAgQIhAUErDCocgQIECBAgAABAUsPECBAgAABAgTCAgJWGFQ5AgQIECBAgICApQcIECBAgAABAmEBASsMqhwBAgQIECBAQMDSAwQIECBAgACBsICAFQZVjgABAgQIECDwH/pv5wRe/E2jAAAAAElFTkSuQmCC
">
						<?php endif; ?>
					</div>
					<div class="content">
						<?php echo get_sub_field('lifestyle_content'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="block block--accessories">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<?php $args = array(
				'post_type' => 'product',
				'order'	=> 'ASC',
				'orderby'	=> 'rand',
				'posts_per_page' => 3,
				'tax_query'     => array(array(
					'taxonomy'  => 'product_cat',
					'field'     => 'term_id',
					'terms'     => array(92),
					'operator'  => 'IN',
				)),
			);
			$query = new WP_Query($args);
			if ($query->have_posts()) :
				while ($query->have_posts()) :
					$query->the_post();
			?>
					<div class="col-lg-4 col-md-6">
						<?php get_template_part('components/product-preview-accessories'); ?>
					</div>
			<?php
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</div>
	</div>
</section>
<section class="block block--testimonial-single">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-8 col-md-10">
				<h2><?php echo get_sub_field('review_title'); ?></h2>
				<div class="image--holder">
					<img src="https://img.youtube.com/vi/<?php echo get_sub_field('review_youtube_id'); ?>/maxresdefault.jpg" />
					<a href="http://www.youtube.com/watch?v=<?php echo get_sub_field('review_youtube_id'); ?>" class="btn--play"><i class="fas fa-play"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
