<article <?php post_class(); ?>>
    <div class="img-box">
        <?php the_post_thumbnail(); ?>
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
    <div class="date">
        <?php the_time(get_option('date_format')); ?>
        <span>&#9679;</span>
        <div class="comments_count">
            Comments: 
            <?php 
                $comments_count = wp_count_comments();

                echo $comments_count->total_comments
            ?>
        </div>
    </div>
        <hr />
        <div class="tags">
            <?php the_tags('', '', '');?>
        </div>
        <a href="<?php the_permalink();?>" class="headline">
            <?php the_title();?>
        </a>
        <div class="content">
            <?php the_excerpt();?>
        </div>
        <a href='<?php the_permalink();?>' class='read-more'>Read More...</a>
    </div>
</article>