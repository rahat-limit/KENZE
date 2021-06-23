<section class="hero-section <?php the_field('color_headings');?>">
    <div class="container">
		<?php 
		if (is_tag()) {
			?>
			<h2><?php single_tag_title();?></h2>
			<?php 
		} elseif (is_category()) {
			?>
			<h2><?php single_cat_title();?></h2>
			<?php
		} elseif (is_search()) {
			?>
			<h2>Search</h2>
			<?php
		} elseif (is_404()) {
			?>
			<h2>404 Error</h2>
			<?php
		} else {
			?>
			<h2><?php the_title();?></h2>
			<?php	
		}
		
		?>
        <div class="img-box">
            <?php 
				if (is_single()) {
					the_post_thumbnail();
				} elseif (is_page(9)) {
					?>
					<img src='<?php echo the_field('header_page_image', 9);?>'/>
					<?php
				} else if (is_page(11)) {
					?>
					<img src='<?php echo the_field('header_page_image', 11);?>'/>
					<?php
				} else if (is_page(5)) {
					?>
					<img src='<?php echo the_field('header_page_image', 11);?>'/>
					<?php
				} else if (is_page(93)) {
					?>
					<img src='<?php echo the_field('header_page_image', 93);?>'/>
					<?php
				} else{
					?>
					<img src='<?php echo the_field('header_page_image', 11);?>'/>
					<?php
				}
			?>
        </div>
    </div>
</section>