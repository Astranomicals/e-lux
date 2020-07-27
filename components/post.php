<?php
/**
 * Display Blog Post
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
<article class="post row justify-content-center" id="post-<?php the_ID(); ?>">
	<div class="col-12">
			<div class="background__full">
				<div class="image__holder">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'blog_row_thumb', array( 'class' => 'img-fluid' ) ); ?>
					<?php else : ?>
						<?php im_the_placeholder_image( 'blog_row_thumb', '' ); ?>
					<?php endif; ?>
				</div>
			</div>
		<?php the_content(); ?>
	</div> 
</article>
