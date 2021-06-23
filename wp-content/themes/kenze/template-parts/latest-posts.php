<section class="posts_v1 <?php 
    if (is_page(9)) {
        echo the_field('show_latest_posts', 9);
    } else if (is_page(11)) {
        echo the_field('show_latest_posts', 11);
    } else if (is_page(5)) {
        echo the_field('show_latest_posts', 5);
    }
?>">
    <div class="rd container">
        <h1>Latest Posts</h1>
    </div>
    <div class="container">
        <?php 
            global $wp_query;

            $save_wpq = $wp_query;

            $wp_query = new WP_Query( array(
                'posts_per_page' => 4,
                'post_type'      => 'post',
                'orderby'        => 'date',
                'order'          => 'DESC',
            )  );
            while ( $wp_query->have_posts() ) {
                $wp_query->the_post();

                ?>
                <div class="post_v1">
                    <div class="img-box">
                        <?php the_post_thumbnail();?>
                    </div>
                    <div class="format-icon-post">
                        <?php
                        $format = get_post_format(); 
                        if ($format === 'video') {
                            ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                            <?php
                        } elseif ($format === 'audio') {
                            ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-music"><path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle></svg>
                            <?php
                        } elseif ($format === 'gallery') {
                            ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="info-box">
                        <div class="headline">
                            <a href='<?php the_permalink();?>'>
                                <h2><?php the_title();?></h2>
                            </a>
                        </div>
                        <div class="text">
                            <p><?php the_excerpt();?></p>
                        </div>
                        <a href="<?php the_permalink();?>" class="read-more">
                            Read More...
                        </a>
                    </div>
                </div>
                <?php
            }

            // пагинация
            ?>
            <?php
            // вернем global $wp_query
            wp_reset_postdata();
            $wp_query = $save_wpq;
        ?>
    </div>
</section>