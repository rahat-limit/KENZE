<?php
// HEADER SHORTCODE

function custom_header( $atts ) {
 
	$params = shortcode_atts( 
		array( 
			'type' => 'v1'
		), 
		$atts 
	);
    if ($params['type'] === 'v1') {
		return get_template_part('template-parts/header', 'v1');
	} elseif ($params['type'] === 'v2') {
		return get_template_part('template-parts/header', 'v2');	
	} elseif ($params['type'] === 'v3') {
		return get_template_part('template-parts/header', 'v3');	
	} else {
		return get_template_part('template-parts/header', 'v1');
	}
}
 
add_shortcode( 'custom_header', 'custom_header' );

// SLIDER SHORTCODE

function custom_slider( $atts ) {
 
	$params = shortcode_atts( 
		array( 
			'type' => 'v1'
		), 
		$atts 
	);
    if ($params['type'] === 'v1') {
		return get_template_part('template-parts/slider', 'v1');
	} elseif ($params['type'] === 'v2') {
		return get_template_part('template-parts/slider', 'v2');	
	} else {
		return get_template_part('template-parts/slider', 'v1');	
	}
}
 
add_shortcode( 'custom_slider', 'custom_slider' );

// POSTS 2 COLUMN
add_shortcode( 'posts_v1', 'posts_v1' );
function posts_v1 ($atts){
	$atts = shortcode_atts( array(
		'posts_per_page' => 4,
		'orderby'        => 'date',	
		'order'          => 'ASC',
		), $atts );
	$args = array(
		'post_status' => 'publish',
		'posts_per_page' => $atts['posts_per_page'],
		'orderby'        => $atts['orderby'],
		'order'          => $atts['order']
		);
	$out_posts = get_posts( $args );
	$out = '<section class="posts_v1"><div class="container">';
	foreach ($out_posts as $post) {
		setup_postdata( $post );
		$out .=
		'
		<div class="post_v1 post format-icon" data-format="'.get_post_format($post->ID).'">
			<div class="img-box">
				'.get_the_post_thumbnail($post->ID).'
			</div>
			<div class="info-box">
				<div class="headline">
					<a href="'.get_the_permalink($post->ID).'">
						<h2>'.get_the_title($post->ID).'</h2>
					</a>
				</div>
				<div class="text">
					<p>'. get_the_excerpt($post->ID).'</p>
				</div>
				<a href="'. get_the_permalink($post->ID). '" class="read-more">
					Read More...
				</a>
			</div>
		</div>
		';
	}
		$out .= '</div><button class="load-more-btn"><a href="'.site_url().'/blog">Browse More</a></button></section>';
	wp_reset_postdata();

	return $out;
}
