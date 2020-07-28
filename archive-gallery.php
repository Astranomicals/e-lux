<?php
/**
 * Single Procedure
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

get_header(); ?>
<section class="block block--full_width_page_header">
	<?php get_template_part( 'components/blocks/full_width_page_header' ); ?>
</section>
<section class="block block--gallery text-center">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="mb-5">Filter By Procedure</h2>
				<div class="select__wrapper">
					<select data-toggle="categories">
					<?php
					$terms = get_terms(
						array(
							'taxonomy' => 'related_procedure',
							'child_of' => 0,
						)
					);
					?>
						<?php foreach ( $terms as $term ) : ?>
						<option data-set-procedure="<?php echo $term->term_id; ?>"><?php echo ( $term->term_id == $procedure ) ? 'class="active"' : ''; ?> <?php echo $term->name; ?> (<?php echo $term->count; ?>)</option>
						<?php endforeach; ?>
					</select>
				</div>
				<div id="grid__gallery" class="grid__gallery">
						<div id="archive-box" data-set-procedure="32"></div>
		  	</div>
		  	<button data-toggle="load-more" class="btn btn--tertiary btn--center">Load More</button>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
