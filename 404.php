<?php

/**
 * 404 Page
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Astranomial Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.astranomicals.com/
 * @since      1.0.0
 */

get_header(); ?>

<div class="row justify-content-center">
	<div class="col-lg-8 col-12">
		<?php get_template_part('components/post-not-found'); ?>
	</div>
</div>

<?php get_footer(); ?>
