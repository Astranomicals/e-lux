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
		<div class="col-xl-5 col-md-6 col-12">
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
		<div class="col-xl-5 col-md-6 col-12">
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
						<?php display_image($bike_image, 'full'); ?>
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
		<div class="row">
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
