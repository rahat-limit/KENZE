<div class="slider v1 capt-v3">
	<div class="container">
		<?php 
		
		$posts = get_posts( array(
			'numberposts' => -1,
			'category_name'  => 'slider_posts',
			'orderby'     => 'date',
			'order'       => 'DESC',
			'include'     => array(),
			'exclude'     => array(),
			'meta_key'    => '',
			'meta_value'  =>'',
			'post_type'   => '',
			'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
		) );

		foreach( $posts as $post ){
			setup_postdata($post);
			?>

			<div class="slider-box Light">
				<div class="info-box">
					<div class="headline">
						<h2><?php the_title();?></h2>
					</div>
					<div class="text">
						<p><?php the_time(get_option('date_format')); ?></p>
					</div>
					<a href='<?php the_permalink();?>' class='slider-btn'>
						<p>Read More</p>
					</a>
				</div>
				<div class="img-box">
					<?php the_post_thumbnail();?> 
				</div>
			</div>

			<?php
		}
		wp_reset_postdata();
		
		?>
		<span class="prev-arrow">
			<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
		</span>
		<span class="next-arrow">
			<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
		</span>
	</div>
</div>