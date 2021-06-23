<?php 
    get_header('main');
    get_template_part('template-parts/slider');
    global $wp_query;
    get_template_part('/template-posts/home-posts');
    get_template_part('/template-parts/newletters');
    get_template_part('/template-posts/posts-f-s');
?>
<?php 
    get_footer('main');
?>