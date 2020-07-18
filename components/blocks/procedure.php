<?php
/**
 * Display Homepage Procedure Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$args = array(
	'post_type'      => 'procedure',
	'post_parent'    => 0,
	'posts_per_page' => 3,
);

$the_query = new WP_Query( $args );
?>

<?php if ( ! empty( $image ) ) : ?>
	<div class="image--holder">
		<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
	</div>
<?php endif; ?>

<div class="container-fluid">
	<div class="row ">
		<div class="col-12 px-0">
			<?php if ( $the_query->have_posts() ) : ?>
				<div class="procedure--area">
					<?php while ( $the_query->have_posts() ) : ?>
						<?php $the_query->the_post(); ?>
							<div class="top--procedure" data-toggle="<?php echo get_the_title(); ?>">
							<div class="content--area">
								<h2><strong class="fancy"><?php echo get_the_title(); ?></strong> Services</h2>
								<?php the_content(); ?>
								<a href="<?php echo get_the_permalink(); ?>" class="btn btn--tertiary">View Procedures</a>
							</div>
							<div class="image--holder">
								<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
							</div>
							<div class="page--area">
								<h3>What We Offer:</h3>
								<ul>
									<?php
									wp_list_pages(
										array(
											'post_type' => 'procedure',
											'title_li'  => '',
											'child_of'  => $post->ID,
										)
									);
									?>
								</ul>
								<hr>
							</div>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<div class="buttons--flex">
						<div class="procedure-btn" data-toggle="Breast">Breast</div>
						<div class="procedure-btn" data-toggle="Body">Body</div>
						<div class="procedure-btn" data-toggle="Face">Face</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
