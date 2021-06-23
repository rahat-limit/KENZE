<?php 
    get_template_part('template-parts/header', 'v2');
    get_template_part('template-parts/slider', 'v2');
    get_template_part('/template-posts/home-posts', 'v2');
    ?>
    <section class="newsletter-wrapper Yes">
        <div class="container">
            <div class="wrapper">
                <h2>Subscribe to our newsletter and stay updated.</h2>
                <div class="tnp tnp-subscription">
                    <form method="post" action="http://localhost/Main/?na=s">
                        <input type="hidden" name="nlang" value="">
                        <div class="tnp-field tnp-field-email">
                            <input class="tnp-email" type="email" name="ne" value="" placeholder="Type Here" required="">
                        </div>
                        <div class="tnp-field tnp-field-button">
                            <input class="tnp-submit" type="submit" value="Subscribe">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php
    get_template_part('/template-posts/posts', 's');
    get_template_part('/template-parts/latest', 'posts');
    ?>


<?php get_footer('main');?>