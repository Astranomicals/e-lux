<?php
/**
 * Display Single Surgeon
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$right_content  = get_sub_field( 'right_content' );
$center_content = get_sub_field( 'center_content' );
?>

<div class="container">
	<div class="row">
		<div class="col-xl-6">
			<div class="image--holder">
				<?php echo get_the_post_thumbnail( $post->ID, 'featured_hero_thumb' ); ?>
			</div>
		</div>
		<div class="col-xl-6">
			<div class="white--box">
					<h4>About</h4>
					<h1><?php echo get_the_title(); ?></h1>
			</div>
			<div class="right--content">
				<?php echo $right_content; ?>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-xl-10 center--content">
			<hr/>
			<?php echo $center_content; ?>
		</div>
	</div>
</div>
</section>
<section class="block block--common-procedures">
	<div class="container">
		<div class="row">
			<div class="col-xl-6">
				<h2>Common Procedures</h2>
			</div>
			<div class="col-xl-6"></div>
		</div>
		<div class="row procedure--links">
			<div class="col-xl-4">
				<h3>Body</h3>
				<?php if ( have_rows( 'body' ) ) : ?>
					<ul>
					<?php
					while ( have_rows( 'body' ) ) :
						the_row();
						?>
						<?php if ( get_row_layout() == 'single_procedure' ) : ?>
							<?php $link = get_sub_field( 'ba_gallery' ); ?>
							<?php $name = get_sub_field( 'procedure_name' ); ?>
							<li><?php echo $name; ?> <?php
							if ( $link ) {
								echo '<a href="' . $link . '"><i class="far fa-images"></i></a>';}
							?>
							</li>
						<?php endif; ?>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
			<div class="col-xl-4">
				<h3>Breast</h3>
				<?php if ( have_rows( 'breast' ) ) : ?>
					<ul>
					<?php
					while ( have_rows( 'breast' ) ) :
						the_row();
						?>
						<?php if ( get_row_layout() == 'single_procedure' ) : ?>
							<?php $link = get_sub_field( 'ba_gallery' ); ?>
							<?php $name = get_sub_field( 'procedure_name' ); ?>
							<li><?php echo $name; ?> <?php
							if ( $link ) {
								echo '<a href="' . $link . '"><i class="far fa-images"></i></a>';}
							?>
							</li>
						<?php endif; ?>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
			<div class="col-xl-4">
				<h3>Face</h3>
				<?php if ( have_rows( 'face' ) ) : ?>
					<ul>
					<?php
					while ( have_rows( 'face' ) ) :
						the_row();
						?>
						<?php if ( get_row_layout() == 'single_procedure' ) : ?>
							<?php $link = get_sub_field( 'ba_gallery' ); ?>
							<?php $name = get_sub_field( 'procedure_name' ); ?>
							<li><?php echo $name; ?> <?php
							if ( $link ) {
								echo '<a href="' . $link . '"><i class="far fa-images"></i></a>';}
							?>
							</li>
						<?php endif; ?>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
