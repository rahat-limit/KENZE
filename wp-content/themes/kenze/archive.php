<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kenze
 */

get_header();
?>

    <main id="primary" class="site-main archive-page">

        <div class="container">

            <div class="posts">
                
                <?php if ( have_posts() ) : ?>
                    
                    <?php

                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/archive-content', get_post_type() );

                    endwhile;

                    the_posts_navigation();

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif;
                ?>

            </div>

            <?php get_template_part('sidebar');?>

        </div>

    </main>

<?php
get_footer('main');
