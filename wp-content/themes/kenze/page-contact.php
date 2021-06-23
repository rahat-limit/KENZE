<?php 
    get_header();
    get_template_part('template-parts/hero');    
?>

<section class="contact-page-section home_posts">
    <div class="container">
        <div class="posts typography">
            <?php the_content();?>
            <?php echo do_shortcode('[contact-form-7 id="167" title="Contact form 1"]');?>
        </div>
        <?php get_template_part('sidebar');?>
    </div>
</section>

<?php get_template_part('/template-parts/newletters');?>

<?php get_template_part('/template-parts/latest', 'posts');?>

<?php get_footer('main');?>