<?php
 get_header();
 get_template_part('template-parts/hero');
?>
<section class='error-section'>
    <div class="container">
        <div class="info-box">
            <h2>404</h2>
            <p>Sorry, no results were found</p>
            <a href='<?php echo site_url();?>'>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            Bring Me Home</a>
        </div>
    </div>
</section>
<?php get_footer('main');?>