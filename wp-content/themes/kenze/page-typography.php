<?php 
    get_header();
    get_template_part('template-parts/hero');
    ?>

    <div class="container typography">
        <?php the_content();?>
    </div>

<?php get_footer('main');?>