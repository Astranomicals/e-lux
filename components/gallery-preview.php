<?php
 /**
  * Display Single Gallery Preview
  *
  * @category   Components
  * @package    WordPress
  * @subpackage Incredible Theme
  * @author     Nick Gonzales
  * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
  * @link       https://www.incrediblemarketing.com/
  * @since      1.0.0
  */

 global $post;
 global $gallerycount;
 $gallerycount++;
?>
<article class="gallery__item" id="post-<?php the_ID();?>">
	<?php
  $gallery_images = get_field( 'gallery_images' );
  $count          = 0;
  if ( $gallery_images ):
 ?>
		<div class="ba__images">
			<?php foreach ( $gallery_images as $image ): ?>
<?php if ( $count < 2 ): ?>
					<div class="image__holder">
						<img src="<?php echo esc_url( $image['sizes']['blog_preview_thumb'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
					</div>
				<?php endif;?>
<?php $count++;?>
<?php endforeach;?>
		</div>
	<?php endif;?>
	<div class="card__bottom">
		<div class="count"><i class="far fa-images"></i> <span><?php echo esc_attr( $count / 2 ); ?></span></div>
		<div class="gallery__procedures" >
			<?php echo esc_attr( wp_trim_words( get_the_content(), 7, '...' ) ); ?>
		</div>
		<div class="light--box" data-toggle="lightbox"><i class="far fa-external-link-alt"></i></div>
	</div>

	<div class="lightbox--patient">
		<div class="lightbox--background" data-toggle="lightbox"></div>
			<div class="container">
				<div class="col-12">
					<div class="block__content">
						<?php get_template_part( 'components/svg/exit-ico' );?>
						<div class="image--area">
						<?php
       $count = 0;
       if ( $gallery_images ):
      ?>
<?php foreach ( $gallery_images as $image ): ?>
<?php if ( 0 === $count ): ?>
										<div class="large__images">
									<?php endif;?>
<?php if ( 0 === $count % 2 && $count > 1 ): ?>
										<div class="small__images">
									<?php endif;?>
										<div class="image--holder">
											<img src="<?php echo esc_url( $image['sizes']['large'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
										</div>
									<?php if ( 1 === $count % 2 && $count > 2 ): ?>
											</div>
									<?php endif;?>
<?php if ( 1 === $count ): ?>
											</div>
									<?php endif;?>
<?php $count++;?>
<?php endforeach;?>
							</div>
						<?php endif;?>
						</div>
						<div class="card__bottom">
							<div class="gallery__description">
								<h5>Case Information</h5>
								<p><?php echo esc_attr( get_the_content() ); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
</article>
