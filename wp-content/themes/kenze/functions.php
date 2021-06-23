<?php
/**
 * kenze functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kenze
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'kenze_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kenze_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on kenze, use a find and replace
		 * to change 'kenze' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kenze', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'kenze' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'kenze_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support('html5', array('search-form'));

		add_theme_support('post-formats', array('gallery', 'video', 'audio'));


		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'kenze_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kenze_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kenze_content_width', 640 );
}
add_action( 'after_setup_theme', 'kenze_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kenze_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'kenze' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kenze' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'kenze_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kenze_scripts() {
	wp_enqueue_style( 'kenze-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'kenze-style', 'rtl', 'replace' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	// Styles
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'lato-light', 'https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap', array(), _S_VERSION );
	wp_enqueue_style( 'playfair-regular', 'https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap', array(), _S_VERSION );
	wp_enqueue_style( 'montserat-regular', 'https://fonts.googleapis.com/css2?family=Montserrat&display=swap', array(), _S_VERSION );
	wp_enqueue_style( 'crimson-regular', 'https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap', array(), _S_VERSION );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array());
	// JS
	wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'kenze_scripts' );


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

require get_template_directory() . '/widgets/widgets.php';

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

require get_template_directory() . '/shortcodes/shortcodes.php';

add_filter('widget_text', 'do_shortcode');

add_action( 'wp_footer', 'my_action_javascript' ); // Write our JS below here

function my_action_javascript() { ?>
	<script>
	jQuery(document).ready(function($) {

		var page = 2;

		var ajaxurl = '<?php echo admin_url("admin-ajax.php");?>'

		jQuery('.load-more-btn').click(function() {
			var data = {
				'action': 'my_action',
				'page': page
			};
				// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
			jQuery.post(ajaxurl, data, function(response) {
				
				if (jQuery('.home_posts')) {
					jQuery('.home_posts').appendChild(response);
				}

				page++;
			});
		})
	});
	</script><?php
}

add_action( 'wp_ajax_my_action', 'my_action' );

function my_action() {
	global $wpdb; // this is how you get access to the database
	$posts = get_posts( array(
		"category"    => 0,
		"orderby"     => "rand",
		"order"       => "ASC",
		"include"     => array(),
		"exclude"     => array(),
		"meta_key"    => "",
		"meta_value"  => "",
		'paged'          => $_POST['page'],
		'posts_per_page' => get_option('posts_per_page'),
		"post_type"   => "post",
		"suppress_filters" => true, // подавление работы фильтров изменения SQL запроса
	) );

	foreach( $posts as $post ){
		setup_postdata($post);
		?>

		<article class="post">
			<div class="img-box">
				<a href="<?php the_permalink();?>">
					<?php the_post_thumbnail(); ?>
				</a>
			</div>
			<div class="format-icon-post">
				<?php
				$format = get_post_format(); 
				if ($format === "video") {
					?>
					<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
					<?php
				} elseif ($format === "audio") {
					?>
					<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-music"><path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle></svg>
					<?php
				} elseif ($format === "gallery") {
					?>
					<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
					<?php
				}
				?>
			</div>
			<div class="info-box">
				<div class="date">
					<?php the_time(get_option("date_format")); ?>
					<span>&#9679;</span>
					<div class="comments_count">
						Comments: 
						<?php 
							$comments_count = wp_count_comments();

							echo $comments_count->total_comments
						?>
					</div>
				</div>
				<hr />
				<div class="tags">
					<?php the_tags("", "", "");?>
				</div>
				<a href="<?php the_permalink();?>" class="headline">
					<?php the_title();?>
				</a>
				<div class="content">
					<?php the_excerpt();?>
				</div>
				<a href="<?php the_permalink();?>" class="read-more">Read More...</a>
			</div>

		</article>

		<?php
	}
	the_posts_pagination();
	
	wp_reset_postdata();

	wp_die(); // this is required to terminate immediately and return a proper response
}