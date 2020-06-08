<?php
/**
 * Entre Líneas functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Entre_Líneas
 */

if ( ! function_exists( 'entre_lineas_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function entre_lineas_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Entre Líneas, use a find and replace
		 * to change 'entre-lineas' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'entre-lineas', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'entre-lineas' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'entre_lineas_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 50,
			'width'       => 185,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		
	}
endif;
add_action( 'after_setup_theme', 'entre_lineas_setup' );

// Colocar el logo en el admin y direcciónar al sitio
function login_logo() { ?>
  <style type="text/css">
    #login h1 a, .login h1 a {
    background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/brand-monogram.png);
		/* background-color:#b1b1b1; */
    width: 100%;
    height:100px;
    background-size: contain;
    background-repeat: no-repeat;
    }
  </style>
<?php } 
add_action( 'login_enqueue_scripts', 'login_logo' );

function login_logo_url() {
  return home_url();
} 
add_filter( 'login_headerurl', 'login_logo_url' );

function login_logo_url_title() {
  return 'Entre Líneas, fútbol de Mendoza';
} 
add_filter( 'login_headertitle', 'login_logo_url_title' );

// Remover mensaje de actualización de WordPress
function remove_core_updates() {
	if (!current_user_can('update_core')) {
			return;
	}
	add_action('init', create_function('$a', "remove_action( 'init', 'wp_version_check' );"), 2);
	add_filter('pre_option_update_core', '__return_null');
	add_filter('pre_site_transient_update_core', '__return_null');
}
add_action('after_setup_theme', 'remove_core_updates');

function hide_update_notice() {
	if ( ! current_user_can( 'update_core' ) ) {
			remove_action( 'admin_notices', 'update_nag', 3 );
	}
}
add_action( 'admin_head', 'hide_update_notice', 1 );

// Modificar usuario Editor
function remove_menus(){

	$roles = wp_get_current_user()->roles;
	 
	
	if( !in_array('editor',$roles)){
	return;
	}
	 
	remove_menu_page( 'edit-comments.php' ); //Comments
	remove_menu_page( 'themes.php' ); //Appearance
	remove_menu_page( 'plugins.php' ); //Plugins
	remove_menu_page( 'users.php' ); //Users
	remove_menu_page( 'tools.php' ); //Tools
	remove_menu_page( 'options-general.php' ); //Settings
	remove_menu_page( 'edit.php?post_type=page' ); //Pages
	}
	add_action( 'admin_menu', 'remove_menus' , 100 );

	

	// Modificar usuario Liga Manager
function remove_menus_liga_manager(){

	$roles = wp_get_current_user()->roles;
	 
	
	if( !in_array('Liga Manager',$roles)){
	return;
	}
	 
	remove_menu_page( 'edit-comments.php' ); 
	remove_menu_page( 'themes.php' );
	remove_menu_page( 'plugins.php' ); 
	remove_menu_page( 'users.php' ); 
	remove_menu_page( 'tools.php' ); 
	remove_menu_page( 'options-general.php' ); 
	remove_menu_page( 'edit.php?post_type=page' ); 
	}
	add_action( 'admin_menu', 'remove_menus_liga_manager' , 100 );

// Soporte SVG
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
 }
 add_filter('upload_mimes', 'cc_mime_types');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function entre_lineas_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'entre_lineas_content_width', 640 );
}
add_action( 'after_setup_theme', 'entre_lineas_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function entre_lineas_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'entre-lineas' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'entre-lineas' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => 'Banner-large HOME',
		'id'            => 'banner-large-home',
		'description'   => __( '1600x350' ),
		'before_widget' => '<figure id="%1$s" class="widget %2$s img-thumbnail">',
		'after_widget'  => '</figure>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	));
	register_sidebar(array(
		'name'          => 'Banner-medium HOME',
		'id'            => 'banner-medium-home',
		'description'   => __( '1200x300' ),
		'before_widget' => '<figure id="%1$s" class="widget %2$s img-thumbnail">',
		'after_widget'  => '</figure>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	));
	register_sidebar(array(
		'name'          => 'Banner-small-top HOME',
		'id'            => 'banner-small-top-home',
		'description'   => __( '500x500' ),
		'before_widget' => '<figure id="%1$s" class="widget %2$s img-thumbnail">',
		'after_widget'  => '</figure>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	));
	register_sidebar(array(
		'name'          => 'Banner-small-bottom HOME',
		'id'            => 'banner-small-bottom-home',
		'description'   => __( '500x500' ),
		'before_widget' => '<figure id="%1$s" class="widget %2$s img-thumbnail">',
		'after_widget'  => '</figure>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	));
	register_sidebar(array(
		'name'          => 'Banner-large TOMBA',
		'id'            => 'banner-large-tomba',
		'description'   => __( '1600x350' ),
		'before_widget' => '<figure id="%1$s" class="widget %2$s img-thumbnail">',
		'after_widget'  => '</figure>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	));
	register_sidebar(array(
		'name'          => 'Banner-small-top TOMBA',
		'id'            => 'banner-small-top-tomba',
		'description'   => __( '500x500' ),
		'before_widget' => '<figure id="%1$s" class="widget %2$s img-thumbnail">',
		'after_widget'  => '</figure>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	));
	register_sidebar(array(
		'name'          => 'Banner-small-bottom TOMBA',
		'id'            => 'banner-small-bottom-tomba',
		'description'   => __( '500x500' ),
		'before_widget' => '<figure id="%1$s" class="widget %2$s img-thumbnail">',
		'after_widget'  => '</figure>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	));
	register_sidebar(array(
		'name'          => 'Banner-large LEPRA',
		'id'            => 'banner-large-lepra',
		'description'   => __( '1600x350' ),
		'before_widget' => '<figure id="%1$s" class="widget %2$s img-thumbnail">',
		'after_widget'  => '</figure>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	));
	register_sidebar(array(
		'name'          => 'Banner-small-top LEPRA',
		'id'            => 'banner-small-top-lepra',
		'description'   => __( '500x500' ),
		'before_widget' => '<figure id="%1$s" class="widget %2$s img-thumbnail">',
		'after_widget'  => '</figure>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	));
	register_sidebar(array(
		'name'          => 'Banner-small-bottom LEPRA',
		'id'            => 'banner-small-bottom-lepra',
		'description'   => __( '500x500' ),
		'before_widget' => '<figure id="%1$s" class="widget %2$s img-thumbnail">',
		'after_widget'  => '</figure>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	));
	register_sidebar(array(
		'name'          => 'Banner-large LOBO',
		'id'            => 'banner-large-lobo',
		'description'   => __( '1600x350' ),
		'before_widget' => '<figure id="%1$s" class="widget %2$s img-thumbnail">',
		'after_widget'  => '</figure>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	));
	register_sidebar(array(
		'name'          => 'Banner-small-top LOBO',
		'id'            => 'banner-small-top-lobo',
		'description'   => __( '500x500' ),
		'before_widget' => '<figure id="%1$s" class="widget %2$s img-thumbnail">',
		'after_widget'  => '</figure>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	));
	register_sidebar(array(
		'name'          => 'Banner-small-bottom LOBO',
		'id'            => 'banner-small-bottom-lobo',
		'description'   => __( '500x500' ),
		'before_widget' => '<figure id="%1$s" class="widget %2$s img-thumbnail">',
		'after_widget'  => '</figure>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	));
}
add_action( 'widgets_init', 'entre_lineas_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function entre_lineas_scripts() {	

	// bootstrap
	wp_enqueue_style('entre-lineas-bootstrap', get_template_directory_uri() .'/css/bootstrap/bootstrap.min.css');

	// animate	
	wp_enqueue_style(
		'entre-lineas-animate', 
		get_template_directory_uri() .'/css/animate/animate.min.css'
	);

	// fonts: Fira
	wp_enqueue_style(
		'entre-lineas-fonts', 
		'https://fonts.googleapis.com/css?family=Fira+Sans:400,500,900|Rokkitt:400,700'
	);
	
	// style.css general
	wp_enqueue_style( 'entre-lineas-style', get_stylesheet_uri() );
		

	// style.css compilado
	wp_enqueue_style( 
		'entre-lineas-style-compilado', 
		get_template_directory_uri() . '/css/style.css', 
		array(),
		$ver = '0.1'
	);

	/* ---- JS ---- */
	// Poper 
	wp_enqueue_script(
		'entre-lineas-poper',
		get_template_directory_uri() . '/js/popper.min.js',
		array('jquery'),
		'1.0',
		true
	);

	// Bootstrap 
	wp_enqueue_script(
		'entre-lineas-bootstrap',
		get_template_directory_uri() . '/js/bootstrap.min.js',
		array('jquery'),
		'1.0',
		true		
	);

	// Main 
	wp_enqueue_script(
		'entre-lineas-main',
		get_template_directory_uri() . '/js/main.js',
		array('jquery'),
		'1.0',
		true		
	);

	wp_enqueue_script( 
		'entre-lineas-navigation', 
		get_template_directory_uri() . '/js/navigation.js', 
		array(), 
		'20151215', 
		true 
	);

	wp_enqueue_script( 'entre-lineas-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'entre_lineas_scripts' );


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

// Remove wp admin top bar in visit site mode
add_filter( 'show_admin_bar', '__return_false' );
