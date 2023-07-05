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
$page_link = get_sub_field('page_link');
$logo_area = get_sub_field('logo_area');
?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-xl-10 col-12">
			<h2>Begin you E-Lux adventure today!</h2>
			<div class="flex--numbers">
				<div class="single--number">
					<h6 class="number">1</h6>
					<p>Take the E-Lux <br />Quiz</p>
				</div>
				<div class="single--number">
					<h6 class="number">2</h6>
					<p>Build your <br />E-Bike</p>
				</div>
				<div class="single--number">
					<h6 class="number">3</h6>
					<p>Order at <br />E-lux</p>
				</div>
			</div>
			<a href="/conceirge/" class="btn btn--secondary">Take the Quiz</a>
		</div>
		<div class="col-12">
			<?php
			$logos = get_sub_field('logo_area');
			if ($logos) : ?>
				<div class="logos">
					<?php foreach ($logos as $image) : ?>
						<div class="single-logo">
							<a href="<?php echo get_field('image_link', $image['ID']); ?>" target="_blank">
								<img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							</a>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
