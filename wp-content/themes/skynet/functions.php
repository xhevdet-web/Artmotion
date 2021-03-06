<?php
/**
 * Skynet functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Skynet
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'skynet_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function skynet_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Skynet, use a find and replace
		 * to change 'skynet' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'skynet', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'skynet' ),
				'header' => esc_html__( 'Header', 'skynet' ),
				'footer' => esc_html__( 'Footer', 'skynet' ),
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
				'skynet_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'skynet_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function skynet_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'skynet_content_width', 640 );
}
add_action( 'after_setup_theme', 'skynet_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function skynet_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'skynet' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'skynet' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'skynet_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function skynet_scripts() {

	wp_enqueue_style( 'skynet-bs', get_template_directory_uri() . '/plugins/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'skynet-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), _S_VERSION );
	wp_enqueue_style( 'skynet-slick', get_template_directory_uri() . '/plugins/slick/slick.css', array(), _S_VERSION );
	wp_enqueue_style( 'skynet-slicktheme', get_template_directory_uri() . '/plugins/slick/slick-theme.css', array(), _S_VERSION );
	wp_enqueue_style( 'skynet-fw4', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'skynet-aos', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'skynet-fw4', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'skynet-style', get_template_directory_uri() . '/css/all.css', array(), _S_VERSION );



    wp_enqueue_script( 'skynet-particles', 'http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'skynet-stats', 'http://threejs.org/examples/js/libs/stats.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'skynet-aosjs', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'skynet-jquery', get_template_directory_uri() . '/plugins/jquery/jquery-3.6.0.min.js', array(), _S_VERSION, false );
	wp_enqueue_script( 'skynet-poper', get_template_directory_uri() . '/plugins/popper/popper.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'skynet-bs4', get_template_directory_uri() . '/plugins/js/bootstrap.min.js', array(), _S_VERSION, false );
	wp_enqueue_script( 'skynet-slick', get_template_directory_uri() . '/plugins/slick/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'skynet-main', get_template_directory_uri() . '/js/scripts.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'skynet_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Theme Header',
        'menu_slug' => 'theme-header-settings',
        'capability' => 'edit_posts',
        'redirect' => true
    ));
    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme General',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => true
    ));
    acf_add_options_page(array(
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Theme Footer',
        'menu_slug' => 'theme-footer-settings',
        'capability' => 'edit_posts',
        'redirect' => true
    ));


}



add_action( 'wp_footer', 'my_ajax_without_file' );

function my_ajax_without_file() { ?>

    <script type="text/javascript" >
        jQuery(document).ready(function($) {
            $('#aplikim-form').on('submit',function (e) {
                e.preventDefault();
                ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ) ?>'; // get ajaxurl

                var data = {
                    'action': 'add_post_from_frontend', // your action name
                    'emri': $('#aplikim-form').find('input[name="emri"]').val(),
                    'email': $('#aplikim-form').find('input[name="email"]').val(),
                    'telefoni': $('#aplikim-form').find('input[name="telefoni"]').val(),
                    'pozita': $('#aplikim-form').find('input[name="pozita"]').val(),
                    'shkollimi': $('#aplikim-form').find('textarea[name="shkollimi"]').val(),
                    'eksperiencat': $('#aplikim-form').find('textarea[name="eksperiencat"]').val()
                };

                jQuery.ajax({
                    url: ajaxurl, // this will point to admin-ajax.php
                    type: 'POST',
                    data: data,
                    success: function (response) {

                        $('.alert-success').removeClass('d-none');
                    },
                    error : function (response) {
                        $('.alert-error').removeClass('d-none');
                    }
                });
            })
        });
    </script>
    <?php
}


add_action("wp_ajax_add_post_from_frontend" , "add_post_from_frontend");
add_action("wp_ajax_nopriv_add_post_from_frontend" , "add_post_from_frontend");

function add_post_from_frontend(){

    $new_post = array(
        'post_title' => $_POST['emri'],
        'post_content' => '',
        'post_status' => 'private',
        'post_type' => 'applications',
    );

    $pid = wp_insert_post($new_post);

    update_post_meta($pid, 'emri_dhe_mbiemri', $_POST['emri']);
    update_post_meta($pid, 'email', $_POST['email']);
    update_post_meta($pid, 'telefoni', $_POST['telefoni']);
    update_post_meta($pid, 'pozita', $_POST['pozita']);
    update_post_meta($pid, 'shkollimi', $_POST['shkollimi']);
    update_post_meta($pid, 'eksperiencat', $_POST['eksperiencat']);

    echo json_encode($pid);
    wp_die();
}

