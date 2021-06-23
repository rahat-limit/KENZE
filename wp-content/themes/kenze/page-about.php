<?php get_header();?>

<section class="about-section typography">
    <div class="container">
        <?php the_content();?>
    </div>
</section>

<?php get_template_part('/template-parts/newletters');?>

<?php get_template_part('/template-parts/latest', 'posts');?>

<?php get_footer('main');?>