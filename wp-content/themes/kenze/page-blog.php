<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kenze
 */

get_header();
get_template_part('template-parts/hero');
?>

	<main id="primary" class="site-main archive-page">

		<div class="container">

            <div class="posts">
                
            <?php 
                global $wp_query;

                $save_wpq = $wp_query;

                $wp_query = new WP_Query( array(
                    'posts_per_page' => get_option('posts_per_page'),
                    'post_type'     => 'post',
                    'paged'         => ( get_query_var('paged') ? get_query_var('paged') : 1 )
                )  );
                while ( $wp_query->have_posts() ) {
                    $wp_query->the_post();

                    get_template_part('template-parts/archive-content');
                }

                // пагинация
                ?>
                <div class="pagination_links">
                    <?php echo paginate_links();?>
                </div>
                <?php
                // вернем global $wp_query
                wp_reset_postdata();
                $wp_query = $save_wpq;
            ?>
            </div>

            <?php get_template_part('sidebar');?>

        </div>

	</main>
    <?php the_content();?>
<?php
get_footer('main');
