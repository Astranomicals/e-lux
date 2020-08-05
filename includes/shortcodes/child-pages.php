<?php

function shortcode_child_pages( $atts ) {

	global $post;

	$args = array(
		'post_parent'    => $post->ID,
		'post_status'    => 'publish',
		'post_type'      => 'procedure',
		'posts_per_page' => -1,
		'order'          => 'ASC',
		'orderby'        => 'menu_order',

	);

	$children = new WP_query( $args );

	if ( $children->have_posts() ) :
		$content = '<div class="children__grid">';
		while ( $children->have_posts() ) :
			$children->the_post();
			$content .= '<div class="child-page">';
			$content .= '<a href="' . get_the_permalink() . '">';
			$content .= '<div class="image--holder">';
			$content .= get_the_post_thumbnail( $post->ID, 'featured_hero_thumb' );
			$content .= '<p>View Procedure</p>';
			$content .= '</div>';
			$content .= '<h3>' . get_the_title() . '</h3>';
			$content .= '</a>';
			$content .= '</div>';
		endwhile;
		$content .= '</div>';
	endif;
	wp_reset_postdata();
	return $content;
}
add_shortcode( 'child_pages', 'shortcode_child_pages' );
