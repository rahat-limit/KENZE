<section class="single_page v1">
    <div class="container">
        <div class="posts typography">
            <?php the_content();?>
            <div class="info">
                <div class="tags">
                    <?php the_tags('Tags: ', '', '');?>
                </div>
                <div class="share-media">
                    Share: 
                    <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
                </div>
            </div>
            <?php 
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            ?>
        </div>
        <?php get_template_part('sidebar');?>
    </div>
</section>