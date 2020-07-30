<?php
/**
 * Archive FAQs
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
<section id="faqs" class="block block--gallery text-center">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 col-12">
				<h2 class="mb-5">Filter By Topic</h2>
				<div class="select__wrapper">
					<ul class="topic-filter">
						<li data-set-topics="0">All</li>
					<?php
					$terms = get_terms(
						array(
							'taxonomy' => 'topics',
							'child_of' => 0,
						)
					);
					?>
						<?php foreach ( $terms as $term ) : ?>
						<li data-set-topics="<?php echo $term->term_id; ?>"><?php echo ( $term->term_id == $procedure ) ? 'class="active"' : ''; ?> <?php echo $term->name; ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div id="topics">
					<div id="archive-box" data-set-topics="0"></div>
			  </div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
