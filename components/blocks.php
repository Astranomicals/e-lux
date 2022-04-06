<?php
/**
 * Display Blocks
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

if ( have_rows( 'blocks' ) ):
 while ( have_rows( 'blocks' ) ):
  the_row();
  $layout   = get_row_layout();
  $block_id = get_sub_field( 'block_id' );

  echo '<section id="block-' . esc_attr( $block_id ) . '" class="block block--' . esc_attr( $layout ) . '">';
  get_template_part( 'components/blocks/' . $layout );
  echo '</section>';
 endwhile;
endif;
