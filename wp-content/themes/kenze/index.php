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

            <div class="posts <?php if (is_search()) {
                ?>
                search-page
                <?php
            } ?>">
                
                <?php
                
                if (have_posts()) {
                    while(have_posts()) {
                        the_post(); 
                        
                        get_template_part('template-parts/archive-content');
                    }
                }
                
                ?>

                <div class="search-empty-result">
                    <h2>Sorry, no results were found</h2>
                    <p>Your search found 0 Items</p>
                    <a href='<?php echo site_url();?>'>Bring Me Back</a>
                </div>

            </div>

            <?php get_template_part('sidebar');?>

        </div>

	</main>

<?php
get_footer('main');
