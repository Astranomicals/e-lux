<?php
/**
 * Archive Gallery
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

get_header();

$p = $_GET['pro'];
$d = $_GET['doctor'];

if ( ! $p ) {
	$p = 0;
}
if ( ! $d ) {
	$d = 0;
}
?>
<section class="block block--full_width_page_header">
	<?php get_template_part( 'components/blocks/full_width_page_header' ); ?>
</section>
<section class="block block--gallery text-center">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="mb-5">Filter By Procedure & Surgeon</h2>
				<div class="select--flex">
					<div class="select__wrapper">
						<select data-toggle="categories">
							<option data-set-procedure="0">All</option>
						<?php
						$terms = get_terms(
							array(
								'taxonomy' => 'related_procedure',
								'child_of' => 0,
							)
						);
						?>
							<?php foreach ( $terms as $term ) : ?>
							<option data-set-procedure="<?php echo $term->term_id; ?>"><?php echo ( $term->term_id == $procedure ) ? 'class="active"' : ''; ?> <?php echo $term->name; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="select__wrapper">
						<select data-toggle="surgeons">
							<option data-set-doctor="0">All Surgeons</option>
						<?php
						$terms = get_terms(
							array(
								'taxonomy' => 'related_doctor',
								'child_of' => 0,
							)
						);
						?>
							<?php foreach ( $terms as $term ) : ?>
							<option data-set-doctor="<?php echo $term->term_id; ?>"><?php echo ( $term->term_id == $doctor ) ? 'class="active"' : ''; ?> <?php echo $term->name; ?></option>
							<?php endforeach; ?>
						</select>
					</div>

				</div>
				<div id="grid__gallery" class="grid__gallery">
					<div id="archive-box" data-set-procedure="<?php echo esc_attr( $p ); ?>" data-set-doctor="<?php echo esc_attr( $d ); ?>">Archive Box</div>
			  </div>
			  <button data-toggle="load-more" class="btn btn--tertiary btn--center">Load More</button>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
