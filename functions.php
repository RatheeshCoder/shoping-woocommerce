<?php


// connecting the style  start

function comerico_style() {
	wp_enqueue_style('bootstrap-style',get_theme_file_uri('./dependencies/bootstrap/css/bootstrap.min.css'), array(), filemtime(get_theme_file_path('./dependencies/bootstrap/css/bootstrap.min.css')));
    wp_enqueue_style('fontawesome-style',get_theme_file_uri('./dependencies/fontawesome/css/fontawesome-all.min.css'), array(), filemtime(get_theme_file_path('./dependencies/bootstrap/css/bootstrap.min.css')));
    wp_enqueue_style('carousel-style',get_theme_file_uri('./dependencies/owl.carousel/css/owl.carousel.min.css'), array(), filemtime(get_theme_file_path('./dependencies/owl.carousel/css/owl.carousel.min.css')));
    wp_enqueue_style('carousel-default-style',get_theme_file_uri('./dependencies/owl.carousel/css/owl.theme.default.min.css'), array(), filemtime(get_theme_file_path('./dependencies/owl.carousel/css/owl.theme.default.min.css')));
    wp_enqueue_style('flaticon-style',get_theme_file_uri('./dependencies/flaticon/css/flaticon.css'), array(), filemtime(get_theme_file_path('./dependencies/flaticon/css/flaticon.css')));
    wp_enqueue_style('animate-style',get_theme_file_uri('./dependencies/wow/css/animate.css'), array(), filemtime(get_theme_file_path('./dependencies/wow/css/animate.css')));
    wp_enqueue_style('jquery-style',get_theme_file_uri('./dependencies/jquery-ui/css/jquery-ui.css'), array(), filemtime(get_theme_file_path('./dependencies/jquery-ui/css/jquery-ui.css')));
    wp_enqueue_style('venobox-style',get_theme_file_uri('./dependencies/venobox/css/venobox.css'), array(), filemtime(get_theme_file_path('./dependencies/venobox/css/venobox.css')));
    wp_enqueue_style('slick-style',get_theme_file_uri('./dependencies/slick-carousel/css/slick.css'), array(), filemtime(get_theme_file_path('./dependencies/slick-carousel/css/slick.css')));
    wp_enqueue_style('app-style',get_theme_file_uri('./assets/css/app.css'), array(), filemtime(get_theme_file_path('./assets/css/app.css')));
	
}
add_action('wp_enqueue_scripts', 'comerico_style');

// connecting the style  end


// connecting the script  start


function comerico_script() {
	wp_enqueue_script('jquery-js', get_theme_file_uri('./dependencies/jquery/jquery.min.js'), NULL, microtime(), true); 
	wp_enqueue_script('popper-js', get_theme_file_uri('./dependencies/popper.js/popper.min.js'), NULL, microtime(), true); 
	wp_enqueue_script('bootstrap-js', get_theme_file_uri('./dependencies/bootstrap/js/bootstrap.min.js'), NULL, microtime(), true); 
	wp_enqueue_script('carousel-js', get_theme_file_uri('./dependencies/owl.carousel/js/owl.carousel.min.js'), NULL, microtime(), true); 
	wp_enqueue_script('wow-js', get_theme_file_uri('./dependencies/wow/js/wow.min.js'), NULL, microtime(), true); 
	wp_enqueue_script('isotope-js', get_theme_file_uri('./dependencies/isotope-layout/js/isotope.pkgd.min.js'), NULL, microtime(), true); 
	wp_enqueue_script('imagesloaded-js', get_theme_file_uri('./dependencies/imagesloaded/js/imagesloaded.pkgd.min.js'), NULL, microtime(), true); 
	wp_enqueue_script('countdown-js', get_theme_file_uri('./dependencies/jquery.countdown/js/jquery.countdown.min.js'), NULL, microtime(), true); 
	wp_enqueue_script('gmap3-js', get_theme_file_uri('./dependencies/gmap3/js/gmap3.min.js'), NULL, microtime(), true); 
	wp_enqueue_script('venobox-js', get_theme_file_uri('./dependencies/venobox/js/venobox.min.js'), NULL, microtime(), true); 
	wp_enqueue_script('slick-js', get_theme_file_uri('./dependencies/slick-carousel/js/slick.js'), NULL, microtime(), true); 
	wp_enqueue_script('headroom-js', get_theme_file_uri('./dependencies/headroom/js/headroom.js'), NULL, microtime(), true); 
	wp_enqueue_script('jquery-ui-js', get_theme_file_uri('./dependencies/jquery-ui/js/jquery-ui.min.js'), NULL, microtime(), true); 
	wp_enqueue_script('app-js', get_theme_file_uri('./assets/js/app.js'), NULL, microtime(), true); 
	wp_enqueue_script('swiper-js','https://maps.googleapis.com/maps/api/js?key=AIzaSyBsBrMPsyNtpwKXPPpG54XwJXnyobfMAIc');
    wp_enqueue_script('cloudflare1-js','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js');
    wp_enqueue_script('cloudflare2-js','https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/js/bootstrap.bundle.min.js');
    wp_enqueue_script('translate-js','https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit');
}
add_action('wp_enqueue_scripts', 'comerico_script');

// connecting the script  end



// Menu bar create
function comercio_config(){
    register_nav_menus(
        array(
            'comercio_main_menu'   =>  'Comercio Main Menu'
        )
        );
}

add_action('after_setup_theme','comercio_config',0);



/**
 * Functions and definitions
 *
 * @link https://www.freelancersleague.com/
 *
 * @package FL- Starter Theme-01
 * @since FL- Starter Theme-01 1.0
 */

 if ( !function_exists( 'starter_theme_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since FL- Starter Theme-01 1.0
	 *
	 * @return void
	 */
	function starter_theme_setup() {

    // Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

    /*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);
    /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// register_nav_menus(
		// 	array(
		// 		'primary' => esc_html__( 'Primary menu', 'gatestarter' ),
		// 		'secondary'  => esc_html__( 'Secondary menu', 'gatestarter' ),
		// 	)
		// );

    /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

    /*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

    // Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

    // Custom background color.
		// add_theme_support(
		// 	'custom-background',
		// 	array(
		// 		'default-color' => 'd1e4dd',
		// 	)
		// );

    // Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support( 'custom-units' );

	}
}
add_action( 'after_setup_theme', 'starter_theme_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @since FL- Starter Theme-01 1.0
 *
 * @global int $content_width Content width.
 *
 * @return void
 */
function starter_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'starter_theme_content_width', 750 );
}
add_action( 'after_setup_theme', 'starter_theme_content_width', 0 );


// custom post type function
function register_custom_post_types() {
    register_post_type( 'BackgroundImage',
        array(
            'labels' => array(
                'name' => __( 'BackgroundImage' ),
                'singular_name' => __( 'Background Image' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'BackgroundImage'),
            'show_in_rest' => true,
			'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTUiIHZpZXdCb3g9IjAgMCAxOCAxNSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEyIDNDMTIgMy43OTU2NSAxMS42ODM5IDQuNTU4NzEgMTEuMTIxMyA1LjEyMTMyQzEwLjU1ODcgNS42ODM5MyA5Ljc5NTY1IDYgOSA2QzguMjA0MzUgNiA3LjQ0MTI5IDUuNjgzOTMgNi44Nzg2OCA1LjEyMTMyQzYuMzE2MDcgNC41NTg3MSA2IDMuNzk1NjUgNiAzQzYgMi4yMDQzNSA2LjMxNjA3IDEuNDQxMjkgNi44Nzg2OCAwLjg3ODY4QzcuNDQxMjkgMC4zMTYwNzEgOC4yMDQzNSAwIDkgMEM5Ljc5NTY1IDAgMTAuNTU4NyAwLjMxNjA3MSAxMS4xMjEzIDAuODc4NjhDMTEuNjgzOSAxLjQ0MTI5IDEyIDIuMjA0MzUgMTIgM1YzWiIgZmlsbD0iI0YwRjBGMSIvPgo8cGF0aCBkPSJNMTcgNUMxNyA1LjUzMDQzIDE2Ljc4OTMgNi4wMzkxNCAxNi40MTQyIDYuNDE0MjFDMTYuMDM5MSA2Ljc4OTI5IDE1LjUzMDQgNyAxNSA3QzE0LjQ2OTYgNyAxMy45NjA5IDYuNzg5MjkgMTMuNTg1OCA2LjQxNDIxQzEzLjIxMDcgNi4wMzkxNCAxMyA1LjUzMDQzIDEzIDVDMTMgNC40Njk1NyAxMy4yMTA3IDMuOTYwODYgMTMuNTg1OCAzLjU4NTc5QzEzLjk2MDkgMy4yMTA3MSAxNC40Njk2IDMgMTUgM0MxNS41MzA0IDMgMTYuMDM5MSAzLjIxMDcxIDE2LjQxNDIgMy41ODU3OUMxNi43ODkzIDMuOTYwODYgMTcgNC40Njk1NyAxNyA1VjVaIiBmaWxsPSIjRjBGMEYxIi8+CjxwYXRoIGQ9Ik0xMyAxMkMxMyAxMC45MzkxIDEyLjU3ODYgOS45MjE3MiAxMS44Mjg0IDkuMTcxNTdDMTEuMDc4MyA4LjQyMTQzIDEwLjA2MDkgOCA5IDhDNy45MzkxMyA4IDYuOTIxNzIgOC40MjE0MyA2LjE3MTU3IDkuMTcxNTdDNS40MjE0MyA5LjkyMTcyIDUgMTAuOTM5MSA1IDEyVjE1SDEzVjEyWiIgZmlsbD0iI0YwRjBGMSIvPgo8cGF0aCBkPSJNNSA1QzUgNS41MzA0MyA0Ljc4OTI5IDYuMDM5MTQgNC40MTQyMSA2LjQxNDIxQzQuMDM5MTQgNi43ODkyOSAzLjUzMDQzIDcgMyA3QzIuNDY5NTcgNyAxLjk2MDg2IDYuNzg5MjkgMS41ODU3OSA2LjQxNDIxQzEuMjEwNzEgNi4wMzkxNCAxIDUuNTMwNDMgMSA1QzEgNC40Njk1NyAxLjIxMDcxIDMuOTYwODYgMS41ODU3OSAzLjU4NTc5QzEuOTYwODYgMy4yMTA3MSAyLjQ2OTU3IDMgMyAzQzMuNTMwNDMgMyA0LjAzOTE0IDMuMjEwNzEgNC40MTQyMSAzLjU4NTc5QzQuNzg5MjkgMy45NjA4NiA1IDQuNDY5NTcgNSA1VjVaIiBmaWxsPSIjRjBGMEYxIi8+CjxwYXRoIGQ9Ik0xNSAxNS4wMDAxVjEyLjAwMDFDMTUuMDAxNCAxMC45ODMzIDE0Ljc0MzMgOS45ODMwOSAxNC4yNSA5LjA5NDA2QzE0LjY5MzMgOC45ODA2IDE1LjE1NjggOC45Njk5IDE1LjYwNDkgOS4wNjI3OEMxNi4wNTMgOS4xNTU2NiAxNi40NzQgOS4zNDk2NSAxNi44MzU3IDkuNjI5OTdDMTcuMTk3NCA5LjkxMDI5IDE3LjQ5MDMgMTAuMjY5NSAxNy42OTIxIDEwLjY4MDNDMTcuODkzOSAxMS4wOTEgMTcuOTk5MiAxMS41NDI0IDE4IDEyLjAwMDFWMTUuMDAwMUgxNVoiIGZpbGw9IiNGMEYwRjEiLz4KPHBhdGggZD0iTTMuNzUgOS4wOTQwNEMzLjI1Njc1IDkuOTgzMDkgMi45OTg2IDEwLjk4MzMgMyAxMlYxNUgyLjY1NzJlLTA3VjEyQy0wLjAwMDE5MjQ2OCAxMS41NDIxIDAuMTA0NDYzIDExLjA5MDIgMC4zMDU5NDcgMTAuNjc4OUMwLjUwNzQzMSAxMC4yNjc2IDAuODAwMzk0IDkuOTA3OTggMS4xNjIzOCA5LjYyNzQ2QzEuNTI0MzcgOS4zNDY5NCAxLjk0NTc4IDkuMTUzMDIgMi4zOTQzMSA5LjA2MDU2QzIuODQyODQgOC45NjgxIDMuMzA2NTggOC45Nzk1NSAzLjc1IDkuMDk0MDRWOS4wOTQwNFoiIGZpbGw9IiNGMEYwRjEiLz4KPC9zdmc+Cg=='
        )
    );
	//////////////////// above is for reference

	//Brands - Custom Post Type
	register_post_type( 'Banner',
        array(
            'labels' => array(
                'name' => __( 'Banner' ),
                'singular_name' => __( 'Banner' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Banner'),
            'show_in_rest' => true,
			'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTUiIHZpZXdCb3g9IjAgMCAxOCAxNSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEyIDNDMTIgMy43OTU2NSAxMS42ODM5IDQuNTU4NzEgMTEuMTIxMyA1LjEyMTMyQzEwLjU1ODcgNS42ODM5MyA5Ljc5NTY1IDYgOSA2QzguMjA0MzUgNiA3LjQ0MTI5IDUuNjgzOTMgNi44Nzg2OCA1LjEyMTMyQzYuMzE2MDcgNC41NTg3MSA2IDMuNzk1NjUgNiAzQzYgMi4yMDQzNSA2LjMxNjA3IDEuNDQxMjkgNi44Nzg2OCAwLjg3ODY4QzcuNDQxMjkgMC4zMTYwNzEgOC4yMDQzNSAwIDkgMEM5Ljc5NTY1IDAgMTAuNTU4NyAwLjMxNjA3MSAxMS4xMjEzIDAuODc4NjhDMTEuNjgzOSAxLjQ0MTI5IDEyIDIuMjA0MzUgMTIgM1YzWiIgZmlsbD0iI0YwRjBGMSIvPgo8cGF0aCBkPSJNMTcgNUMxNyA1LjUzMDQzIDE2Ljc4OTMgNi4wMzkxNCAxNi40MTQyIDYuNDE0MjFDMTYuMDM5MSA2Ljc4OTI5IDE1LjUzMDQgNyAxNSA3QzE0LjQ2OTYgNyAxMy45NjA5IDYuNzg5MjkgMTMuNTg1OCA2LjQxNDIxQzEzLjIxMDcgNi4wMzkxNCAxMyA1LjUzMDQzIDEzIDVDMTMgNC40Njk1NyAxMy4yMTA3IDMuOTYwODYgMTMuNTg1OCAzLjU4NTc5QzEzLjk2MDkgMy4yMTA3MSAxNC40Njk2IDMgMTUgM0MxNS41MzA0IDMgMTYuMDM5MSAzLjIxMDcxIDE2LjQxNDIgMy41ODU3OUMxNi43ODkzIDMuOTYwODYgMTcgNC40Njk1NyAxNyA1VjVaIiBmaWxsPSIjRjBGMEYxIi8+CjxwYXRoIGQ9Ik0xMyAxMkMxMyAxMC45MzkxIDEyLjU3ODYgOS45MjE3MiAxMS44Mjg0IDkuMTcxNTdDMTEuMDc4MyA4LjQyMTQzIDEwLjA2MDkgOCA5IDhDNy45MzkxMyA4IDYuOTIxNzIgOC40MjE0MyA2LjE3MTU3IDkuMTcxNTdDNS40MjE0MyA5LjkyMTcyIDUgMTAuOTM5MSA1IDEyVjE1SDEzVjEyWiIgZmlsbD0iI0YwRjBGMSIvPgo8cGF0aCBkPSJNNSA1QzUgNS41MzA0MyA0Ljc4OTI5IDYuMDM5MTQgNC40MTQyMSA2LjQxNDIxQzQuMDM5MTQgNi43ODkyOSAzLjUzMDQzIDcgMyA3QzIuNDY5NTcgNyAxLjk2MDg2IDYuNzg5MjkgMS41ODU3OSA2LjQxNDIxQzEuMjEwNzEgNi4wMzkxNCAxIDUuNTMwNDMgMSA1QzEgNC40Njk1NyAxLjIxMDcxIDMuOTYwODYgMS41ODU3OSAzLjU4NTc5QzEuOTYwODYgMy4yMTA3MSAyLjQ2OTU3IDMgMyAzQzMuNTMwNDMgMyA0LjAzOTE0IDMuMjEwNzEgNC40MTQyMSAzLjU4NTc5QzQuNzg5MjkgMy45NjA4NiA1IDQuNDY5NTcgNSA1VjVaIiBmaWxsPSIjRjBGMEYxIi8+CjxwYXRoIGQ9Ik0xNSAxNS4wMDAxVjEyLjAwMDFDMTUuMDAxNCAxMC45ODMzIDE0Ljc0MzMgOS45ODMwOSAxNC4yNSA5LjA5NDA2QzE0LjY5MzMgOC45ODA2IDE1LjE1NjggOC45Njk5IDE1LjYwNDkgOS4wNjI3OEMxNi4wNTMgOS4xNTU2NiAxNi40NzQgOS4zNDk2NSAxNi44MzU3IDkuNjI5OTdDMTcuMTk3NCA5LjkxMDI5IDE3LjQ5MDMgMTAuMjY5NSAxNy42OTIxIDEwLjY4MDNDMTcuODkzOSAxMS4wOTEgMTcuOTk5MiAxMS41NDI0IDE4IDEyLjAwMDFWMTUuMDAwMUgxNVoiIGZpbGw9IiNGMEYwRjEiLz4KPHBhdGggZD0iTTMuNzUgOS4wOTQwNEMzLjI1Njc1IDkuOTgzMDkgMi45OTg2IDEwLjk4MzMgMyAxMlYxNUgyLjY1NzJlLTA3VjEyQy0wLjAwMDE5MjQ2OCAxMS41NDIxIDAuMTA0NDYzIDExLjA5MDIgMC4zMDU5NDcgMTAuNjc4OUMwLjUwNzQzMSAxMC4yNjc2IDAuODAwMzk0IDkuOTA3OTggMS4xNjIzOCA5LjYyNzQ2QzEuNTI0MzcgOS4zNDY5NCAxLjk0NTc4IDkuMTUzMDIgMi4zOTQzMSA5LjA2MDU2QzIuODQyODQgOC45NjgxIDMuMzA2NTggOC45Nzk1NSAzLjc1IDkuMDk0MDRWOS4wOTQwNFoiIGZpbGw9IiNGMEYwRjEiLz4KPC9zdmc+Cg=='
        )
    );

	//ProductFilter - Custom Post Type
	register_post_type( 'ProductFilter',
        array(
            'labels' => array(
                'name' => __( 'ProductFilter' ),
                'singular_name' => __( 'ProductFilter' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'ProductFilter'),
            'show_in_rest' => true,
			'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTUiIHZpZXdCb3g9IjAgMCAxOCAxNSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEyIDNDMTIgMy43OTU2NSAxMS42ODM5IDQuNTU4NzEgMTEuMTIxMyA1LjEyMTMyQzEwLjU1ODcgNS42ODM5MyA5Ljc5NTY1IDYgOSA2QzguMjA0MzUgNiA3LjQ0MTI5IDUuNjgzOTMgNi44Nzg2OCA1LjEyMTMyQzYuMzE2MDcgNC41NTg3MSA2IDMuNzk1NjUgNiAzQzYgMi4yMDQzNSA2LjMxNjA3IDEuNDQxMjkgNi44Nzg2OCAwLjg3ODY4QzcuNDQxMjkgMC4zMTYwNzEgOC4yMDQzNSAwIDkgMEM5Ljc5NTY1IDAgMTAuNTU4NyAwLjMxNjA3MSAxMS4xMjEzIDAuODc4NjhDMTEuNjgzOSAxLjQ0MTI5IDEyIDIuMjA0MzUgMTIgM1YzWiIgZmlsbD0iI0YwRjBGMSIvPgo8cGF0aCBkPSJNMTcgNUMxNyA1LjUzMDQzIDE2Ljc4OTMgNi4wMzkxNCAxNi40MTQyIDYuNDE0MjFDMTYuMDM5MSA2Ljc4OTI5IDE1LjUzMDQgNyAxNSA3QzE0LjQ2OTYgNyAxMy45NjA5IDYuNzg5MjkgMTMuNTg1OCA2LjQxNDIxQzEzLjIxMDcgNi4wMzkxNCAxMyA1LjUzMDQzIDEzIDVDMTMgNC40Njk1NyAxMy4yMTA3IDMuOTYwODYgMTMuNTg1OCAzLjU4NTc5QzEzLjk2MDkgMy4yMTA3MSAxNC40Njk2IDMgMTUgM0MxNS41MzA0IDMgMTYuMDM5MSAzLjIxMDcxIDE2LjQxNDIgMy41ODU3OUMxNi43ODkzIDMuOTYwODYgMTcgNC40Njk1NyAxNyA1VjVaIiBmaWxsPSIjRjBGMEYxIi8+CjxwYXRoIGQ9Ik0xMyAxMkMxMyAxMC45MzkxIDEyLjU3ODYgOS45MjE3MiAxMS44Mjg0IDkuMTcxNTdDMTEuMDc4MyA4LjQyMTQzIDEwLjA2MDkgOCA5IDhDNy45MzkxMyA4IDYuOTIxNzIgOC40MjE0MyA2LjE3MTU3IDkuMTcxNTdDNS40MjE0MyA5LjkyMTcyIDUgMTAuOTM5MSA1IDEyVjE1SDEzVjEyWiIgZmlsbD0iI0YwRjBGMSIvPgo8cGF0aCBkPSJNNSA1QzUgNS41MzA0MyA0Ljc4OTI5IDYuMDM5MTQgNC40MTQyMSA2LjQxNDIxQzQuMDM5MTQgNi43ODkyOSAzLjUzMDQzIDcgMyA3QzIuNDY5NTcgNyAxLjk2MDg2IDYuNzg5MjkgMS41ODU3OSA2LjQxNDIxQzEuMjEwNzEgNi4wMzkxNCAxIDUuNTMwNDMgMSA1QzEgNC40Njk1NyAxLjIxMDcxIDMuOTYwODYgMS41ODU3OSAzLjU4NTc5QzEuOTYwODYgMy4yMTA3MSAyLjQ2OTU3IDMgMyAzQzMuNTMwNDMgMyA0LjAzOTE0IDMuMjEwNzEgNC40MTQyMSAzLjU4NTc5QzQuNzg5MjkgMy45NjA4NiA1IDQuNDY5NTcgNSA1VjVaIiBmaWxsPSIjRjBGMEYxIi8+CjxwYXRoIGQ9Ik0xNSAxNS4wMDAxVjEyLjAwMDFDMTUuMDAxNCAxMC45ODMzIDE0Ljc0MzMgOS45ODMwOSAxNC4yNSA5LjA5NDA2QzE0LjY5MzMgOC45ODA2IDE1LjE1NjggOC45Njk5IDE1LjYwNDkgOS4wNjI3OEMxNi4wNTMgOS4xNTU2NiAxNi40NzQgOS4zNDk2NSAxNi44MzU3IDkuNjI5OTdDMTcuMTk3NCA5LjkxMDI5IDE3LjQ5MDMgMTAuMjY5NSAxNy42OTIxIDEwLjY4MDNDMTcuODkzOSAxMS4wOTEgMTcuOTk5MiAxMS41NDI0IDE4IDEyLjAwMDFWMTUuMDAwMUgxNVoiIGZpbGw9IiNGMEYwRjEiLz4KPHBhdGggZD0iTTMuNzUgOS4wOTQwNEMzLjI1Njc1IDkuOTgzMDkgMi45OTg2IDEwLjk4MzMgMyAxMlYxNUgyLjY1NzJlLTA3VjEyQy0wLjAwMDE5MjQ2OCAxMS41NDIxIDAuMTA0NDYzIDExLjA5MDIgMC4zMDU5NDcgMTAuNjc4OUMwLjUwNzQzMSAxMC4yNjc2IDAuODAwMzk0IDkuOTA3OTggMS4xNjIzOCA5LjYyNzQ2QzEuNTI0MzcgOS4zNDY5NCAxLjk0NTc4IDkuMTUzMDIgMi4zOTQzMSA5LjA2MDU2QzIuODQyODQgOC45NjgxIDMuMzA2NTggOC45Nzk1NSAzLjc1IDkuMDk0MDRWOS4wOTQwNFoiIGZpbGw9IiNGMEYwRjEiLz4KPC9zdmc+Cg=='
        )
    );

	//Feature - Custom Post Type
	register_post_type( 'Feature',
        array(
            'labels' => array(
                'name' => __( 'Feature' ),
                'singular_name' => __( 'Feature' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Feature'),
            'show_in_rest' => true,
			'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTUiIHZpZXdCb3g9IjAgMCAxOCAxNSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEyIDNDMTIgMy43OTU2NSAxMS42ODM5IDQuNTU4NzEgMTEuMTIxMyA1LjEyMTMyQzEwLjU1ODcgNS42ODM5MyA5Ljc5NTY1IDYgOSA2QzguMjA0MzUgNiA3LjQ0MTI5IDUuNjgzOTMgNi44Nzg2OCA1LjEyMTMyQzYuMzE2MDcgNC41NTg3MSA2IDMuNzk1NjUgNiAzQzYgMi4yMDQzNSA2LjMxNjA3IDEuNDQxMjkgNi44Nzg2OCAwLjg3ODY4QzcuNDQxMjkgMC4zMTYwNzEgOC4yMDQzNSAwIDkgMEM5Ljc5NTY1IDAgMTAuNTU4NyAwLjMxNjA3MSAxMS4xMjEzIDAuODc4NjhDMTEuNjgzOSAxLjQ0MTI5IDEyIDIuMjA0MzUgMTIgM1YzWiIgZmlsbD0iI0YwRjBGMSIvPgo8cGF0aCBkPSJNMTcgNUMxNyA1LjUzMDQzIDE2Ljc4OTMgNi4wMzkxNCAxNi40MTQyIDYuNDE0MjFDMTYuMDM5MSA2Ljc4OTI5IDE1LjUzMDQgNyAxNSA3QzE0LjQ2OTYgNyAxMy45NjA5IDYuNzg5MjkgMTMuNTg1OCA2LjQxNDIxQzEzLjIxMDcgNi4wMzkxNCAxMyA1LjUzMDQzIDEzIDVDMTMgNC40Njk1NyAxMy4yMTA3IDMuOTYwODYgMTMuNTg1OCAzLjU4NTc5QzEzLjk2MDkgMy4yMTA3MSAxNC40Njk2IDMgMTUgM0MxNS41MzA0IDMgMTYuMDM5MSAzLjIxMDcxIDE2LjQxNDIgMy41ODU3OUMxNi43ODkzIDMuOTYwODYgMTcgNC40Njk1NyAxNyA1VjVaIiBmaWxsPSIjRjBGMEYxIi8+CjxwYXRoIGQ9Ik0xMyAxMkMxMyAxMC45MzkxIDEyLjU3ODYgOS45MjE3MiAxMS44Mjg0IDkuMTcxNTdDMTEuMDc4MyA4LjQyMTQzIDEwLjA2MDkgOCA5IDhDNy45MzkxMyA4IDYuOTIxNzIgOC40MjE0MyA2LjE3MTU3IDkuMTcxNTdDNS40MjE0MyA5LjkyMTcyIDUgMTAuOTM5MSA1IDEyVjE1SDEzVjEyWiIgZmlsbD0iI0YwRjBGMSIvPgo8cGF0aCBkPSJNNSA1QzUgNS41MzA0MyA0Ljc4OTI5IDYuMDM5MTQgNC40MTQyMSA2LjQxNDIxQzQuMDM5MTQgNi43ODkyOSAzLjUzMDQzIDcgMyA3QzIuNDY5NTcgNyAxLjk2MDg2IDYuNzg5MjkgMS41ODU3OSA2LjQxNDIxQzEuMjEwNzEgNi4wMzkxNCAxIDUuNTMwNDMgMSA1QzEgNC40Njk1NyAxLjIxMDcxIDMuOTYwODYgMS41ODU3OSAzLjU4NTc5QzEuOTYwODYgMy4yMTA3MSAyLjQ2OTU3IDMgMyAzQzMuNTMwNDMgMyA0LjAzOTE0IDMuMjEwNzEgNC40MTQyMSAzLjU4NTc5QzQuNzg5MjkgMy45NjA4NiA1IDQuNDY5NTcgNSA1VjVaIiBmaWxsPSIjRjBGMEYxIi8+CjxwYXRoIGQ9Ik0xNSAxNS4wMDAxVjEyLjAwMDFDMTUuMDAxNCAxMC45ODMzIDE0Ljc0MzMgOS45ODMwOSAxNC4yNSA5LjA5NDA2QzE0LjY5MzMgOC45ODA2IDE1LjE1NjggOC45Njk5IDE1LjYwNDkgOS4wNjI3OEMxNi4wNTMgOS4xNTU2NiAxNi40NzQgOS4zNDk2NSAxNi44MzU3IDkuNjI5OTdDMTcuMTk3NCA5LjkxMDI5IDE3LjQ5MDMgMTAuMjY5NSAxNy42OTIxIDEwLjY4MDNDMTcuODkzOSAxMS4wOTEgMTcuOTk5MiAxMS41NDI0IDE4IDEyLjAwMDFWMTUuMDAwMUgxNVoiIGZpbGw9IiNGMEYwRjEiLz4KPHBhdGggZD0iTTMuNzUgOS4wOTQwNEMzLjI1Njc1IDkuOTgzMDkgMi45OTg2IDEwLjk4MzMgMyAxMlYxNUgyLjY1NzJlLTA3VjEyQy0wLjAwMDE5MjQ2OCAxMS41NDIxIDAuMTA0NDYzIDExLjA5MDIgMC4zMDU5NDcgMTAuNjc4OUMwLjUwNzQzMSAxMC4yNjc2IDAuODAwMzk0IDkuOTA3OTggMS4xNjIzOCA5LjYyNzQ2QzEuNTI0MzcgOS4zNDY5NCAxLjk0NTc4IDkuMTUzMDIgMi4zOTQzMSA5LjA2MDU2QzIuODQyODQgOC45NjgxIDMuMzA2NTggOC45Nzk1NSAzLjc1IDkuMDk0MDRWOS4wOTQwNFoiIGZpbGw9IiNGMEYwRjEiLz4KPC9zdmc+Cg=='
        )
    );


    //Trending - Custom Post Type
	register_post_type( 'Trending',
        array(
            'labels' => array(
                'name' => __( 'Trending' ),
                'singular_name' => __( 'Trending' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'Trending'),
            'show_in_rest' => true,
			'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2LjY2NjcgNi42NjY2M0gzLjMzMzQxVjQuOTk5OTZIMTYuNjY2N1Y2LjY2NjYzWk0xNS4wMDAxIDEuNjY2NjNINS4wMDAwOFYzLjMzMzI5SDE1LjAwMDFWMS42NjY2M1pNMTguMzMzNCA5Ljk5OTk2VjE2LjY2NjZDMTguMzMzNCAxNy4xMDg3IDE4LjE1NzggMTcuNTMyNiAxNy44NDUzIDE3Ljg0NTFDMTcuNTMyNyAxOC4xNTc3IDE3LjEwODggMTguMzMzMyAxNi42NjY3IDE4LjMzMzNIMy4zMzM0MUMyLjg5MTc5IDE4LjMzMiAyLjQ2ODY0IDE4LjE1NiAyLjE1NjM2IDE3Ljg0MzdDMS44NDQwOSAxNy41MzE0IDEuNjY4MDcgMTcuMTA4MiAxLjY2Njc1IDE2LjY2NjZWOS45OTk5NkMxLjY2ODA3IDkuNTU4MzQgMS44NDQwOSA5LjEzNTE4IDIuMTU2MzYgOC44MjI5QzIuNDY4NjQgOC41MTA2MyAyLjg5MTc5IDguMzM0NjEgMy4zMzM0MSA4LjMzMzI5SDE2LjY2NjdDMTcuMTA4NCA4LjMzNDYxIDE3LjUzMTUgOC41MTA2MyAxNy44NDM4IDguODIyOUMxOC4xNTYxIDkuMTM1MTggMTguMzMyMSA5LjU1ODM0IDE4LjMzMzQgOS45OTk5NlpNMTEuNjA1OSAxNC4yMDE2TDEzLjU0MTcgMTIuNTQ2NkwxMC45OTI2IDEyLjMzMzNMMTAuMDAwMSA5Ljk5OTk2TDkuMDA3NTggMTIuMzMzM0w2LjQ1ODQxIDEyLjU0NjZMOC4zOTQyNSAxNC4yMDE2TDcuODEwOTEgMTYuNjY2NkwxMC4wMDAxIDE1LjM1NjZMMTIuMTg5MiAxNi42NjY2TDExLjYwNTkgMTQuMjAxNloiIGZpbGw9IiNGMEYwRjEiLz4KPC9zdmc+Cg=='
        )
    );

    //BestProduct - Custom Post Type
	register_post_type( 'BestProduct',
        array(
            'labels' => array(
                'name' => __( 'BestProduct' ),
                'singular_name' => __( 'BestProduct' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'BestProduct'),
            'show_in_rest' => true,
			'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE0LjE2NjYgMTMuMzMzNUMxMy43MDgzIDEzLjMzMzUgMTMuMzMzMyAxMi45NTg1IDEzLjMzMzMgMTIuNTAwMkg2LjY2NjYzQzYuNjY2NjMgMTIuOTU4NSA2LjI5MTYzIDEzLjMzMzUgNS44MzMyOSAxMy4zMzM1QzUuMzc0OTYgMTMuMzMzNSA0Ljk5OTk2IDEyLjk1ODUgNC45OTk5NiAxMi41MDAySDEuNjY2NjNWMTUuMDAwMkMxLjY2NjYzIDE1LjkxNjggMi40MTY2MyAxNi42NjY4IDMuMzMzMjkgMTYuNjY2OEgxNi42NjY2QzE3LjU4MzMgMTYuNjY2OCAxOC4zMzMzIDE1LjkxNjggMTguMzMzMyAxNS4wMDAyVjEyLjUwMDJIMTVDMTUgMTIuOTU4NSAxNC42MjUgMTMuMzMzNSAxNC4xNjY2IDEzLjMzMzVaTTE2LjY2NjYgNi42NjY4M0gxNC4xNjY2VjUuMDAwMTZDMTQuMTY2NiA0LjA4MzUgMTMuNDE2NiAzLjMzMzUgMTIuNSAzLjMzMzVINy40OTk5NkM2LjU4MzI5IDMuMzMzNSA1LjgzMzI5IDQuMDgzNSA1LjgzMzI5IDUuMDAwMTZWNi42NjY4M0gzLjMzMzI5QzIuNDE2NjMgNi42NjY4MyAxLjY2NjYzIDcuNDE2ODMgMS42NjY2MyA4LjMzMzVWMTEuNjY2OEg0Ljk5OTk2VjEwLjgzMzVDNC45OTk5NiAxMC4zNzUyIDUuMzc0OTYgMTAuMDAwMiA1LjgzMzI5IDEwLjAwMDJDNi4yOTE2MyAxMC4wMDAyIDYuNjY2NjMgMTAuMzc1MiA2LjY2NjYzIDEwLjgzMzVWMTEuNjY2OEgxMy4zMzMzVjEwLjgzMzVDMTMuMzMzMyAxMC4zNzUyIDEzLjcwODMgMTAuMDAwMiAxNC4xNjY2IDEwLjAwMDJDMTQuNjI1IDEwLjAwMDIgMTUgMTAuMzc1MiAxNSAxMC44MzM1VjExLjY2NjhIMTguMzMzM1Y4LjMzMzVDMTguMzMzMyA3LjQxNjgzIDE3LjU4MzMgNi42NjY4MyAxNi42NjY2IDYuNjY2ODNaTTEyLjUgNi42NjY4M0g3LjQ5OTk2VjUuMDAwMTZIMTIuNVY2LjY2NjgzWiIgZmlsbD0iI0YwRjZGQyIvPgo8L3N2Zz4K'
        )
    );


     //SingleBlogPost - Custom Post Type
	register_post_type( 'SingleBlogPost',
    array(
        'labels' => array(
            'name' => __( 'SingleBlogPost' ),
            'singular_name' => __( 'SingleBlogPost' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'SingleBlogPost'),
        'show_in_rest' => true,
        'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE0LjE2NjYgMTMuMzMzNUMxMy43MDgzIDEzLjMzMzUgMTMuMzMzMyAxMi45NTg1IDEzLjMzMzMgMTIuNTAwMkg2LjY2NjYzQzYuNjY2NjMgMTIuOTU4NSA2LjI5MTYzIDEzLjMzMzUgNS44MzMyOSAxMy4zMzM1QzUuMzc0OTYgMTMuMzMzNSA0Ljk5OTk2IDEyLjk1ODUgNC45OTk5NiAxMi41MDAySDEuNjY2NjNWMTUuMDAwMkMxLjY2NjYzIDE1LjkxNjggMi40MTY2MyAxNi42NjY4IDMuMzMzMjkgMTYuNjY2OEgxNi42NjY2QzE3LjU4MzMgMTYuNjY2OCAxOC4zMzMzIDE1LjkxNjggMTguMzMzMyAxNS4wMDAyVjEyLjUwMDJIMTVDMTUgMTIuOTU4NSAxNC42MjUgMTMuMzMzNSAxNC4xNjY2IDEzLjMzMzVaTTE2LjY2NjYgNi42NjY4M0gxNC4xNjY2VjUuMDAwMTZDMTQuMTY2NiA0LjA4MzUgMTMuNDE2NiAzLjMzMzUgMTIuNSAzLjMzMzVINy40OTk5NkM2LjU4MzI5IDMuMzMzNSA1LjgzMzI5IDQuMDgzNSA1LjgzMzI5IDUuMDAwMTZWNi42NjY4M0gzLjMzMzI5QzIuNDE2NjMgNi42NjY4MyAxLjY2NjYzIDcuNDE2ODMgMS42NjY2MyA4LjMzMzVWMTEuNjY2OEg0Ljk5OTk2VjEwLjgzMzVDNC45OTk5NiAxMC4zNzUyIDUuMzc0OTYgMTAuMDAwMiA1LjgzMzI5IDEwLjAwMDJDNi4yOTE2MyAxMC4wMDAyIDYuNjY2NjMgMTAuMzc1MiA2LjY2NjYzIDEwLjgzMzVWMTEuNjY2OEgxMy4zMzMzVjEwLjgzMzVDMTMuMzMzMyAxMC4zNzUyIDEzLjcwODMgMTAuMDAwMiAxNC4xNjY2IDEwLjAwMDJDMTQuNjI1IDEwLjAwMDIgMTUgMTAuMzc1MiAxNSAxMC44MzM1VjExLjY2NjhIMTguMzMzM1Y4LjMzMzVDMTguMzMzMyA3LjQxNjgzIDE3LjU4MzMgNi42NjY4MyAxNi42NjY2IDYuNjY2ODNaTTEyLjUgNi42NjY4M0g3LjQ5OTk2VjUuMDAwMTZIMTIuNVY2LjY2NjgzWiIgZmlsbD0iI0YwRjZGQyIvPgo8L3N2Zz4K'
    )
);

     //Blogs Categories - Custom Post Type
     register_post_type( 'BlogsCategories',
     array(
         'labels' => array(
             'name' => __( 'Blogs Categories' ),
             'singular_name' => __( 'BlogsCategories' )
         ),
         'public' => true,
         'has_archive' => true,
         'rewrite' => array('slug' => 'BlogsCategories'),
         'show_in_rest' => true,
         'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE0LjE2NjYgMTMuMzMzNUMxMy43MDgzIDEzLjMzMzUgMTMuMzMzMyAxMi45NTg1IDEzLjMzMzMgMTIuNTAwMkg2LjY2NjYzQzYuNjY2NjMgMTIuOTU4NSA2LjI5MTYzIDEzLjMzMzUgNS44MzMyOSAxMy4zMzM1QzUuMzc0OTYgMTMuMzMzNSA0Ljk5OTk2IDEyLjk1ODUgNC45OTk5NiAxMi41MDAySDEuNjY2NjNWMTUuMDAwMkMxLjY2NjYzIDE1LjkxNjggMi40MTY2MyAxNi42NjY4IDMuMzMzMjkgMTYuNjY2OEgxNi42NjY2QzE3LjU4MzMgMTYuNjY2OCAxOC4zMzMzIDE1LjkxNjggMTguMzMzMyAxNS4wMDAyVjEyLjUwMDJIMTVDMTUgMTIuOTU4NSAxNC42MjUgMTMuMzMzNSAxNC4xNjY2IDEzLjMzMzVaTTE2LjY2NjYgNi42NjY4M0gxNC4xNjY2VjUuMDAwMTZDMTQuMTY2NiA0LjA4MzUgMTMuNDE2NiAzLjMzMzUgMTIuNSAzLjMzMzVINy40OTk5NkM2LjU4MzI5IDMuMzMzNSA1LjgzMzI5IDQuMDgzNSA1LjgzMzI5IDUuMDAwMTZWNi42NjY4M0gzLjMzMzI5QzIuNDE2NjMgNi42NjY4MyAxLjY2NjYzIDcuNDE2ODMgMS42NjY2MyA4LjMzMzVWMTEuNjY2OEg0Ljk5OTk2VjEwLjgzMzVDNC45OTk5NiAxMC4zNzUyIDUuMzc0OTYgMTAuMDAwMiA1LjgzMzI5IDEwLjAwMDJDNi4yOTE2MyAxMC4wMDAyIDYuNjY2NjMgMTAuMzc1MiA2LjY2NjYzIDEwLjgzMzVWMTEuNjY2OEgxMy4zMzMzVjEwLjgzMzVDMTMuMzMzMyAxMC4zNzUyIDEzLjcwODMgMTAuMDAwMiAxNC4xNjY2IDEwLjAwMDJDMTQuNjI1IDEwLjAwMDIgMTUgMTAuMzc1MiAxNSAxMC44MzM1VjExLjY2NjhIMTguMzMzM1Y4LjMzMzVDMTguMzMzMyA3LjQxNjgzIDE3LjU4MzMgNi42NjY4MyAxNi42NjY2IDYuNjY2ODNaTTEyLjUgNi42NjY4M0g3LjQ5OTk2VjUuMDAwMTZIMTIuNVY2LjY2NjgzWiIgZmlsbD0iI0YwRjZGQyIvPgo8L3N2Zz4K'
     )
 );


     //Blogs Tags - Custom Post Type
     register_post_type( 'BlogsTags',
     array(
         'labels' => array(
             'name' => __( 'Blogs Tags' ),
             'singular_name' => __( 'BlogsTags' )
         ),
         'public' => true,
         'has_archive' => true,
         'rewrite' => array('slug' => 'BlogsTags'),
         'show_in_rest' => true,
         'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE0LjE2NjYgMTMuMzMzNUMxMy43MDgzIDEzLjMzMzUgMTMuMzMzMyAxMi45NTg1IDEzLjMzMzMgMTIuNTAwMkg2LjY2NjYzQzYuNjY2NjMgMTIuOTU4NSA2LjI5MTYzIDEzLjMzMzUgNS44MzMyOSAxMy4zMzM1QzUuMzc0OTYgMTMuMzMzNSA0Ljk5OTk2IDEyLjk1ODUgNC45OTk5NiAxMi41MDAySDEuNjY2NjNWMTUuMDAwMkMxLjY2NjYzIDE1LjkxNjggMi40MTY2MyAxNi42NjY4IDMuMzMzMjkgMTYuNjY2OEgxNi42NjY2QzE3LjU4MzMgMTYuNjY2OCAxOC4zMzMzIDE1LjkxNjggMTguMzMzMyAxNS4wMDAyVjEyLjUwMDJIMTVDMTUgMTIuOTU4NSAxNC42MjUgMTMuMzMzNSAxNC4xNjY2IDEzLjMzMzVaTTE2LjY2NjYgNi42NjY4M0gxNC4xNjY2VjUuMDAwMTZDMTQuMTY2NiA0LjA4MzUgMTMuNDE2NiAzLjMzMzUgMTIuNSAzLjMzMzVINy40OTk5NkM2LjU4MzI5IDMuMzMzNSA1LjgzMzI5IDQuMDgzNSA1LjgzMzI5IDUuMDAwMTZWNi42NjY4M0gzLjMzMzI5QzIuNDE2NjMgNi42NjY4MyAxLjY2NjYzIDcuNDE2ODMgMS42NjY2MyA4LjMzMzVWMTEuNjY2OEg0Ljk5OTk2VjEwLjgzMzVDNC45OTk5NiAxMC4zNzUyIDUuMzc0OTYgMTAuMDAwMiA1LjgzMzI5IDEwLjAwMDJDNi4yOTE2MyAxMC4wMDAyIDYuNjY2NjMgMTAuMzc1MiA2LjY2NjYzIDEwLjgzMzVWMTEuNjY2OEgxMy4zMzMzVjEwLjgzMzVDMTMuMzMzMyAxMC4zNzUyIDEzLjcwODMgMTAuMDAwMiAxNC4xNjY2IDEwLjAwMDJDMTQuNjI1IDEwLjAwMDIgMTUgMTAuMzc1MiAxNSAxMC44MzM1VjExLjY2NjhIMTguMzMzM1Y4LjMzMzVDMTguMzMzMyA3LjQxNjgzIDE3LjU4MzMgNi42NjY4MyAxNi42NjY2IDYuNjY2ODNaTTEyLjUgNi42NjY4M0g3LjQ5OTk2VjUuMDAwMTZIMTIuNVY2LjY2NjgzWiIgZmlsbD0iI0YwRjZGQyIvPgo8L3N2Zz4K'
     )
 );

      //Blogs Tags - Custom Post Type
      register_post_type( 'Comments',
      array(
          'labels' => array(
              'name' => __( 'Comments' ),
              'singular_name' => __( 'Comments' )
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'Comments'),
          'show_in_rest' => true,
          'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE0LjE2NjYgMTMuMzMzNUMxMy43MDgzIDEzLjMzMzUgMTMuMzMzMyAxMi45NTg1IDEzLjMzMzMgMTIuNTAwMkg2LjY2NjYzQzYuNjY2NjMgMTIuOTU4NSA2LjI5MTYzIDEzLjMzMzUgNS44MzMyOSAxMy4zMzM1QzUuMzc0OTYgMTMuMzMzNSA0Ljk5OTk2IDEyLjk1ODUgNC45OTk5NiAxMi41MDAySDEuNjY2NjNWMTUuMDAwMkMxLjY2NjYzIDE1LjkxNjggMi40MTY2MyAxNi42NjY4IDMuMzMzMjkgMTYuNjY2OEgxNi42NjY2QzE3LjU4MzMgMTYuNjY2OCAxOC4zMzMzIDE1LjkxNjggMTguMzMzMyAxNS4wMDAyVjEyLjUwMDJIMTVDMTUgMTIuOTU4NSAxNC42MjUgMTMuMzMzNSAxNC4xNjY2IDEzLjMzMzVaTTE2LjY2NjYgNi42NjY4M0gxNC4xNjY2VjUuMDAwMTZDMTQuMTY2NiA0LjA4MzUgMTMuNDE2NiAzLjMzMzUgMTIuNSAzLjMzMzVINy40OTk5NkM2LjU4MzI5IDMuMzMzNSA1LjgzMzI5IDQuMDgzNSA1LjgzMzI5IDUuMDAwMTZWNi42NjY4M0gzLjMzMzI5QzIuNDE2NjMgNi42NjY4MyAxLjY2NjYzIDcuNDE2ODMgMS42NjY2MyA4LjMzMzVWMTEuNjY2OEg0Ljk5OTk2VjEwLjgzMzVDNC45OTk5NiAxMC4zNzUyIDUuMzc0OTYgMTAuMDAwMiA1LjgzMzI5IDEwLjAwMDJDNi4yOTE2MyAxMC4wMDAyIDYuNjY2NjMgMTAuMzc1MiA2LjY2NjYzIDEwLjgzMzVWMTEuNjY2OEgxMy4zMzMzVjEwLjgzMzVDMTMuMzMzMyAxMC4zNzUyIDEzLjcwODMgMTAuMDAwMiAxNC4xNjY2IDEwLjAwMDJDMTQuNjI1IDEwLjAwMDIgMTUgMTAuMzc1MiAxNSAxMC44MzM1VjExLjY2NjhIMTguMzMzM1Y4LjMzMzVDMTguMzMzMyA3LjQxNjgzIDE3LjU4MzMgNi42NjY4MyAxNi42NjY2IDYuNjY2ODNaTTEyLjUgNi42NjY4M0g3LjQ5OTk2VjUuMDAwMTZIMTIuNVY2LjY2NjgzWiIgZmlsbD0iI0YwRjZGQyIvPgo8L3N2Zz4K'
      )
  );
 

	    //InstagramPost - Custom Post Type
		register_post_type( 'InstagramPost',
        array(
            'labels' => array(
                'name' => __( 'Instagram Post' ),
                'singular_name' => __( 'InstagramPost' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'InstagramPost'),
            'show_in_rest' => true,
			'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2LjY2NjcgNi42NjY2M0gzLjMzMzQxVjQuOTk5OTZIMTYuNjY2N1Y2LjY2NjYzWk0xNS4wMDAxIDEuNjY2NjNINS4wMDAwOFYzLjMzMzI5SDE1LjAwMDFWMS42NjY2M1pNMTguMzMzNCA5Ljk5OTk2VjE2LjY2NjZDMTguMzMzNCAxNy4xMDg3IDE4LjE1NzggMTcuNTMyNiAxNy44NDUzIDE3Ljg0NTFDMTcuNTMyNyAxOC4xNTc3IDE3LjEwODggMTguMzMzMyAxNi42NjY3IDE4LjMzMzNIMy4zMzM0MUMyLjg5MTc5IDE4LjMzMiAyLjQ2ODY0IDE4LjE1NiAyLjE1NjM2IDE3Ljg0MzdDMS44NDQwOSAxNy41MzE0IDEuNjY4MDcgMTcuMTA4MiAxLjY2Njc1IDE2LjY2NjZWOS45OTk5NkMxLjY2ODA3IDkuNTU4MzQgMS44NDQwOSA5LjEzNTE4IDIuMTU2MzYgOC44MjI5QzIuNDY4NjQgOC41MTA2MyAyLjg5MTc5IDguMzM0NjEgMy4zMzM0MSA4LjMzMzI5SDE2LjY2NjdDMTcuMTA4NCA4LjMzNDYxIDE3LjUzMTUgOC41MTA2MyAxNy44NDM4IDguODIyOUMxOC4xNTYxIDkuMTM1MTggMTguMzMyMSA5LjU1ODM0IDE4LjMzMzQgOS45OTk5NlpNMTEuNjA1OSAxNC4yMDE2TDEzLjU0MTcgMTIuNTQ2NkwxMC45OTI2IDEyLjMzMzNMMTAuMDAwMSA5Ljk5OTk2TDkuMDA3NTggMTIuMzMzM0w2LjQ1ODQxIDEyLjU0NjZMOC4zOTQyNSAxNC4yMDE2TDcuODEwOTEgMTYuNjY2NkwxMC4wMDAxIDE1LjM1NjZMMTIuMTg5MiAxNi42NjY2TDExLjYwNTkgMTQuMjAxNloiIGZpbGw9IiNGMEYwRjEiLz4KPC9zdmc+Cg=='
        )
    );


     //SHOP ALSO HERE - Custom Post Type
			register_post_type( 'ShopHere',
			array(
				'labels' => array(
					'name' => __( 'SHOP  HERE' ),
					'singular_name' => __( 'ShopHere' )
				),
				'public' => true,
				'has_archive' => false,
				'rewrite' => array('slug' => 'ShopHere'),
				'show_in_rest' => true,
				'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2LjY2NjcgNi42NjY2M0gzLjMzMzQxVjQuOTk5OTZIMTYuNjY2N1Y2LjY2NjYzWk0xNS4wMDAxIDEuNjY2NjNINS4wMDAwOFYzLjMzMzI5SDE1LjAwMDFWMS42NjY2M1pNMTguMzMzNCA5Ljk5OTk2VjE2LjY2NjZDMTguMzMzNCAxNy4xMDg3IDE4LjE1NzggMTcuNTMyNiAxNy44NDUzIDE3Ljg0NTFDMTcuNTMyNyAxOC4xNTc3IDE3LjEwODggMTguMzMzMyAxNi42NjY3IDE4LjMzMzNIMy4zMzM0MUMyLjg5MTc5IDE4LjMzMiAyLjQ2ODY0IDE4LjE1NiAyLjE1NjM2IDE3Ljg0MzdDMS44NDQwOSAxNy41MzE0IDEuNjY4MDcgMTcuMTA4MiAxLjY2Njc1IDE2LjY2NjZWOS45OTk5NkMxLjY2ODA3IDkuNTU4MzQgMS44NDQwOSA5LjEzNTE4IDIuMTU2MzYgOC44MjI5QzIuNDY4NjQgOC41MTA2MyAyLjg5MTc5IDguMzM0NjEgMy4zMzM0MSA4LjMzMzI5SDE2LjY2NjdDMTcuMTA4NCA4LjMzNDYxIDE3LjUzMTUgOC41MTA2MyAxNy44NDM4IDguODIyOUMxOC4xNTYxIDkuMTM1MTggMTguMzMyMSA5LjU1ODM0IDE4LjMzMzQgOS45OTk5NlpNMTEuNjA1OSAxNC4yMDE2TDEzLjU0MTcgMTIuNTQ2NkwxMC45OTI2IDEyLjMzMzNMMTAuMDAwMSA5Ljk5OTk2TDkuMDA3NTggMTIuMzMzM0w2LjQ1ODQxIDEyLjU0NjZMOC4zOTQyNSAxNC4yMDE2TDcuODEwOTEgMTYuNjY2NkwxMC4wMDAxIDE1LjM1NjZMMTIuMTg5MiAxNi42NjY2TDExLjYwNTkgMTQuMjAxNloiIGZpbGw9IiNGMEYwRjEiLz4KPC9zdmc+Cg=='
			)
		);


	
	    //LogoArea - Custom Post Type
		register_post_type( 'LogoArea',
        array(
            'labels' => array(
                'name' => __( 'LogoArea' ),
                'singular_name' => __( 'LogoArea' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'LogoArea'),
            'show_in_rest' => true,
			'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2LjY2NjcgNi42NjY2M0gzLjMzMzQxVjQuOTk5OTZIMTYuNjY2N1Y2LjY2NjYzWk0xNS4wMDAxIDEuNjY2NjNINS4wMDAwOFYzLjMzMzI5SDE1LjAwMDFWMS42NjY2M1pNMTguMzMzNCA5Ljk5OTk2VjE2LjY2NjZDMTguMzMzNCAxNy4xMDg3IDE4LjE1NzggMTcuNTMyNiAxNy44NDUzIDE3Ljg0NTFDMTcuNTMyNyAxOC4xNTc3IDE3LjEwODggMTguMzMzMyAxNi42NjY3IDE4LjMzMzNIMy4zMzM0MUMyLjg5MTc5IDE4LjMzMiAyLjQ2ODY0IDE4LjE1NiAyLjE1NjM2IDE3Ljg0MzdDMS44NDQwOSAxNy41MzE0IDEuNjY4MDcgMTcuMTA4MiAxLjY2Njc1IDE2LjY2NjZWOS45OTk5NkMxLjY2ODA3IDkuNTU4MzQgMS44NDQwOSA5LjEzNTE4IDIuMTU2MzYgOC44MjI5QzIuNDY4NjQgOC41MTA2MyAyLjg5MTc5IDguMzM0NjEgMy4zMzM0MSA4LjMzMzI5SDE2LjY2NjdDMTcuMTA4NCA4LjMzNDYxIDE3LjUzMTUgOC41MTA2MyAxNy44NDM4IDguODIyOUMxOC4xNTYxIDkuMTM1MTggMTguMzMyMSA5LjU1ODM0IDE4LjMzMzQgOS45OTk5NlpNMTEuNjA1OSAxNC4yMDE2TDEzLjU0MTcgMTIuNTQ2NkwxMC45OTI2IDEyLjMzMzNMMTAuMDAwMSA5Ljk5OTk2TDkuMDA3NTggMTIuMzMzM0w2LjQ1ODQxIDEyLjU0NjZMOC4zOTQyNSAxNC4yMDE2TDcuODEwOTEgMTYuNjY2NkwxMC4wMDAxIDE1LjM1NjZMMTIuMTg5MiAxNi42NjY2TDExLjYwNTkgMTQuMjAxNloiIGZpbGw9IiNGMEYwRjEiLz4KPC9zdmc+Cg=='
        )
    );


		    //CLIENTS - Custom Post Type
			register_post_type( 'CLIENTS',
			array(
				'labels' => array(
					'name' => __( 'CLIENTS' ),
					'singular_name' => __( 'CLIENTS' )
				),
				'public' => true,
				'has_archive' => false,
				'rewrite' => array('slug' => 'CLIENTS'),
				'show_in_rest' => true,
				'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2LjY2NjcgNi42NjY2M0gzLjMzMzQxVjQuOTk5OTZIMTYuNjY2N1Y2LjY2NjYzWk0xNS4wMDAxIDEuNjY2NjNINS4wMDAwOFYzLjMzMzI5SDE1LjAwMDFWMS42NjY2M1pNMTguMzMzNCA5Ljk5OTk2VjE2LjY2NjZDMTguMzMzNCAxNy4xMDg3IDE4LjE1NzggMTcuNTMyNiAxNy44NDUzIDE3Ljg0NTFDMTcuNTMyNyAxOC4xNTc3IDE3LjEwODggMTguMzMzMyAxNi42NjY3IDE4LjMzMzNIMy4zMzM0MUMyLjg5MTc5IDE4LjMzMiAyLjQ2ODY0IDE4LjE1NiAyLjE1NjM2IDE3Ljg0MzdDMS44NDQwOSAxNy41MzE0IDEuNjY4MDcgMTcuMTA4MiAxLjY2Njc1IDE2LjY2NjZWOS45OTk5NkMxLjY2ODA3IDkuNTU4MzQgMS44NDQwOSA5LjEzNTE4IDIuMTU2MzYgOC44MjI5QzIuNDY4NjQgOC41MTA2MyAyLjg5MTc5IDguMzM0NjEgMy4zMzM0MSA4LjMzMzI5SDE2LjY2NjdDMTcuMTA4NCA4LjMzNDYxIDE3LjUzMTUgOC41MTA2MyAxNy44NDM4IDguODIyOUMxOC4xNTYxIDkuMTM1MTggMTguMzMyMSA5LjU1ODM0IDE4LjMzMzQgOS45OTk5NlpNMTEuNjA1OSAxNC4yMDE2TDEzLjU0MTcgMTIuNTQ2NkwxMC45OTI2IDEyLjMzMzNMMTAuMDAwMSA5Ljk5OTk2TDkuMDA3NTggMTIuMzMzM0w2LjQ1ODQxIDEyLjU0NjZMOC4zOTQyNSAxNC4yMDE2TDcuODEwOTEgMTYuNjY2NkwxMC4wMDAxIDE1LjM1NjZMMTIuMTg5MiAxNi42NjY2TDExLjYwNTkgMTQuMjAxNloiIGZpbGw9IiNGMEYwRjEiLz4KPC9zdmc+Cg=='
			)
		);


           //Best Products - Custom Post Type
			register_post_type( 'BestProducts',
			array(
				'labels' => array(
					'name' => __( 'BestProducts' ),
					'singular_name' => __( 'BestProducts' )
				),
				'public' => true,
				'has_archive' => false,
				'rewrite' => array('slug' => 'BestProducts'),
				'show_in_rest' => true,
				'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2LjY2NjcgNi42NjY2M0gzLjMzMzQxVjQuOTk5OTZIMTYuNjY2N1Y2LjY2NjYzWk0xNS4wMDAxIDEuNjY2NjNINS4wMDAwOFYzLjMzMzI5SDE1LjAwMDFWMS42NjY2M1pNMTguMzMzNCA5Ljk5OTk2VjE2LjY2NjZDMTguMzMzNCAxNy4xMDg3IDE4LjE1NzggMTcuNTMyNiAxNy44NDUzIDE3Ljg0NTFDMTcuNTMyNyAxOC4xNTc3IDE3LjEwODggMTguMzMzMyAxNi42NjY3IDE4LjMzMzNIMy4zMzM0MUMyLjg5MTc5IDE4LjMzMiAyLjQ2ODY0IDE4LjE1NiAyLjE1NjM2IDE3Ljg0MzdDMS44NDQwOSAxNy41MzE0IDEuNjY4MDcgMTcuMTA4MiAxLjY2Njc1IDE2LjY2NjZWOS45OTk5NkMxLjY2ODA3IDkuNTU4MzQgMS44NDQwOSA5LjEzNTE4IDIuMTU2MzYgOC44MjI5QzIuNDY4NjQgOC41MTA2MyAyLjg5MTc5IDguMzM0NjEgMy4zMzM0MSA4LjMzMzI5SDE2LjY2NjdDMTcuMTA4NCA4LjMzNDYxIDE3LjUzMTUgOC41MTA2MyAxNy44NDM4IDguODIyOUMxOC4xNTYxIDkuMTM1MTggMTguMzMyMSA5LjU1ODM0IDE4LjMzMzQgOS45OTk5NlpNMTEuNjA1OSAxNC4yMDE2TDEzLjU0MTcgMTIuNTQ2NkwxMC45OTI2IDEyLjMzMzNMMTAuMDAwMSA5Ljk5OTk2TDkuMDA3NTggMTIuMzMzM0w2LjQ1ODQxIDEyLjU0NjZMOC4zOTQyNSAxNC4yMDE2TDcuODEwOTEgMTYuNjY2NkwxMC4wMDAxIDE1LjM1NjZMMTIuMTg5MiAxNi42NjY2TDExLjYwNTkgMTQuMjAxNloiIGZpbGw9IiNGMEYwRjEiLz4KPC9zdmc+Cg=='
			)
		);


}
add_action( 'init', 'register_custom_post_types' );

add_action('wp_head', 'show_template');
function show_template() {
    global $template;
	
}


//// Allowing SVG Uploads
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {

	global $wp_version;
	if ($wp_version !== '4.7.1') {
		return $data;
	}

	$filetype = wp_check_filetype($filename, $mimes);

	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
}, 10, 4);

function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg()
{
	echo '<style type="text/css">
		  .attachment-266x266, .thumbnail img {
			   width: 100% !important;
			   height: auto !important;
		  }
		  </style>';
}
add_action('admin_head', 'fix_svg');


// Active Nav bar

add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

function special_nav_class($classes, $item)
{
	if (in_array('current-menu-item', $classes)) {
		$classes[] = 'toogle__active ';
	}
	return $classes;
}
// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

/// Remove p tag around img
// function filter_ptags_on_images($content){
//    return preg_replace('​<p> <a> <img> </a> </p>', '1 2 3', $content);
// }

// add_filter('the_content', 'filter_ptags_on_images');

function arphabet_widgets_init() {

    register_sidebar( array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


?>

<?php

// Remove existing product data panels
function custom_remove_product_data_panels() {
    remove_action('woocommerce_product_options_general_product_data', 'woocommerce_product_sku_panel');
    remove_action('woocommerce_product_options_general_product_data', 'woocommerce_product_stock_status_panel');
    remove_action('woocommerce_product_options_general_product_data', 'woocommerce_product_short_description');
    remove_action('woocommerce_product_options_general_product_data', 'woocommerce_product_description');
    // Add more remove_action() calls as needed to remove other panels
}
add_action('init', 'custom_remove_product_data_panels');

// Add custom product data panels
function custom_add_product_data_panels() {
    add_action('woocommerce_product_options_general_product_data', 'custom_product_sku_panel');
    add_action('woocommerce_product_options_general_product_data', 'custom_product_stock_status_panel');
    // Add more add_action() calls as needed to add other panels
}
add_action('init', 'custom_add_product_data_panels');

// Custom product SKU panel
function custom_product_sku_panel() {
    global $post;
    $custom_sku = get_post_meta($post->ID, 'custom_sku', true);
    ?>
    <div class="options_group">
        <p class="form-field">
            <label for="custom_sku"><?php esc_html_e('Custom SKU', 'your-domain'); ?></label>
            <input type="text" class="short" name="custom_sku" id="custom_sku" value="<?php echo esc_attr($custom_sku); ?>" placeholder="<?php esc_attr_e('Enter custom SKU', 'your-domain'); ?>" />
        </p>
    </div>
    <?php
}

// Custom product stock status panel
function custom_product_stock_status_panel() {
    global $post;
    $custom_stock_status = get_post_meta($post->ID, 'custom_stock_status', true);
    ?>
    <div class="options_group">
        <p class="form-field">
            <label for="custom_stock_status"><?php esc_html_e('Custom Stock Status', 'your-domain'); ?></label>
            <select name="custom_stock_status" id="custom_stock_status">
                <option value="instock" <?php selected('instock', $custom_stock_status); ?>><?php esc_html_e('In Stock', 'your-domain'); ?></option>
                <option value="outofstock" <?php selected('outofstock', $custom_stock_status); ?>><?php esc_html_e('Out of Stock', 'your-domain'); ?></option>
            </select>
        </p>
    </div>
    <?php
}

// Save custom product data
function custom_save_product_data($product_id) {
    if (isset($_POST['custom_sku'])) {
        update_post_meta($product_id, 'custom_sku', sanitize_text_field($_POST['custom_sku']));
    }
    if (isset($_POST['custom_stock_status'])) {
        update_post_meta($product_id, 'custom_stock_status', sanitize_text_field($_POST['custom_stock_status']));
    }
    // Add more update_post_meta() calls as needed for other custom fields
}
add_action('woocommerce_process_product_meta', 'custom_save_product_data');

// Add custom fields to the product data tabs
function custom_add_product_custom_fields() {
	global $post;
    $product_type = get_post_meta($post->ID, '_product_type', true);
    $product_color = get_post_meta($post->ID, 'product_color', true);
    $product_name = get_post_meta($post->ID, '_product_name', true);
    $product_image = get_post_meta($post->ID, '_product_image', true);
    $product_title = get_post_meta($post->ID, '_product_title', true);
	

    // Main Image
    echo '<div class="options_group">';
    echo '<p class="form-field">';
    echo '<label for="_product_image">' . __('Main Image', 'your-domain') . '</label>';
    echo '<input type="text" class="short" name="_product_image" id="_product_image" value="' . esc_attr($product_image) . '" placeholder="' . __('Enter main image URL', 'your-domain') . '" />';
    echo '<button class="button" id="select_product_image">' . __('Select Image', 'your-domain') . '</button>';
    echo '</p>';
    echo '</div>';

// Sub Images
echo '<div class="options_group">';
echo '<p class="form-field">';
for ($i = 1; $i <= 5; $i++) {
    $sub_image = get_post_meta($post->ID, '_product_sub_image_' . $i, true);
    echo '<label for="_product_sub_image_' . $i . '">' . __('Sub Image ' . $i, 'your-domain') . '</label>';
    echo '<input type="text" class="short" name="_product_sub_image_' . $i . '" id="_product_sub_image_' . $i . '" value="' . esc_attr($sub_image) . '" placeholder="' . __('Enter sub image ' . $i . ' URL', 'your-domain') . '" />';
    echo '<button class="button" id="select_product_sub_image_' . $i . '">' . __('Select Image', 'your-domain') . '</button>';
    echo '<br>';
}
echo '</p>';
echo '</div>';


    ?>
    <script>
    jQuery(function($) {
        // Open media uploader when "Select Image" button is clicked
        $('#select_product_image').on('click', function(e) {
            e.preventDefault();
            var imageUploader = wp.media({
                title: '<?php echo __('Select Image', 'your-domain'); ?>',
                button: {
                    text: '<?php echo __('Use Image', 'your-domain'); ?>'
                },
                multiple: false
            }).on('select', function() {
                var attachment = imageUploader.state().get('selection').first().toJSON();
                $('#_product_image').val(attachment.url);
            }).open();
        });

        // Open media uploader for sub images
        <?php for ($i = 1; $i <= 5; $i++) : ?>
        $('#select_product_sub_image_<?php echo $i; ?>').on('click', function(e) {
            e.preventDefault();
            var imageUploader = wp.media({
                title: '<?php echo __('Select Image', 'your-domain'); ?>',
                button: {
                    text: '<?php echo __('Use Image', 'your-domain'); ?>'
                },
                multiple: false
            }).on('select', function() {
                var attachment = imageUploader.state().get('selection').first().toJSON();
                $('#_product_sub_image_<?php echo $i; ?>').val(attachment.url);
            }).open();
        });
        <?php endfor; ?>
    });
    </script>
    <?php
    // Product Title
woocommerce_wp_text_input(
	array(
		'id' => '_product_title',
		'label' => __('Product Title', 'your-domain'),
		'placeholder' => __('Enter product title', 'your-domain'),
		'value' => $product_title,
	)
);



    // Product Name
    woocommerce_wp_text_input(
        array(
            'id' => '_product_name',
            'label' => __('Product Name', 'your-domain'),
            'placeholder' => __('Enter product name', 'your-domain'),
            'value' => $product_name,
        )
    );

    // Product Type
    woocommerce_wp_select(
        array(
            'id' => '_product_type',
            'label' => __('Product Type', 'your-domain'),
            'options' => array(
                '' => __('Select', 'your-domain'),
                'Men' => __('Men', 'Men'),
                'Women' => __('Women', 'Women'),
				'Kids' => __('Kids', 'Kids'),
                // Add more product type options as needed
            ),
            'value' => $product_type,
        )
    );

    // Product Color
    woocommerce_wp_text_input(
        array(
            'id' => 'product_color',
            'label' => __('Product Color', 'your-domain'),
            'placeholder' => __('Enter product color', 'your-domain'),
            'value' => $product_color,
        )
    );




    // Add more custom fields as needed

}
add_action('woocommerce_product_options_general_product_data', 'custom_add_product_custom_fields');

// Save custom fields
function custom_save_product_custom_fields($product_id) {
    if (isset($_POST['_product_image'])) {
        update_post_meta($product_id, '_product_image', sanitize_text_field($_POST['_product_image']));
    }
    if (isset($_POST['_product_name'])) {
        update_post_meta($product_id, '_product_name', sanitize_text_field($_POST['_product_name']));
    }
    if (isset($_POST['_product_type'])) {
        update_post_meta($product_id, '_product_type', sanitize_text_field($_POST['_product_type']));
    }
    if (isset($_POST['product_color'])) {
        update_post_meta($product_id, 'product_color', sanitize_text_field($_POST['product_color']));
    }

    if (isset($_POST['_product_title'])) {
        update_post_meta($product_id, '_product_title', sanitize_text_field($_POST['_product_title']));
    }
    for ($i = 1; $i <= 5; $i++) {
        if (isset($_POST['_product_sub_image_' . $i])) {
            update_post_meta($product_id, '_product_sub_image_' . $i, sanitize_text_field($_POST['_product_sub_image_' . $i]));
        }
    }
    // Add more update_post_meta() calls as needed for other custom fields
}
add_action('woocommerce_process_product_meta', 'custom_save_product_custom_fields');




// Add product_categories to custom section in product editor
function add_custom_product_fields() {
    $args = array(
        'taxonomy'      => 'product_cat',
        'hide_empty'    => false,
    );

    $categories = get_categories( $args );

    echo '<div class="options_group">';

    woocommerce_wp_select( array(
        'id'            => 'custom_product_category',
        'label'         => __( 'Product Category', 'woocommerce' ),
        'options'       => get_product_categories_options( $categories ),
    ) );

    echo '</div>';
}
add_action( 'woocommerce_product_options_general_product_data', 'add_custom_product_fields' );

// Save the custom field value
function save_custom_product_fields( $product ) {
    $custom_product_category = isset( $_POST['custom_product_category'] ) ? sanitize_text_field( $_POST['custom_product_category'] ) : '';
    $product->update_meta_data( 'custom_product_category', $custom_product_category );
}
add_action( 'woocommerce_admin_process_product_object', 'save_custom_product_fields', 10, 1 );

// Display the custom field value in the frontend
function display_custom_product_fields() {
    global $product;

    $custom_product_category = $product->get_meta( 'custom_product_category' );

    if ( $custom_product_category ) {
        $category = get_term_by( 'id', $custom_product_category, 'product_cat' );

        if ( $category ) {
            echo '<div class="custom-product-category">';
            echo '<strong>' . __( 'Custom Category:', 'woocommerce' ) . '</strong> ';
            echo '<span>' . $category->name . '</span>';
            echo '</div>';
        }
    }
}
add_action( 'woocommerce_after_single_product_summary', 'display_custom_product_fields', 5 );

// Helper function to get product categories as options
function get_product_categories_options( $categories ) {
    $options = array();

    foreach ( $categories as $category ) {
        $options[ $category->term_id ] = $category->name;
    }

    return $options;
}



// Add custom description field to the product section
function custom_product_description() {
    global $woocommerce, $post;

    echo '<div class="options_group">';

    echo '<h2>' . __('DESCRIPTION', 'your-domain') . '</h2>';

    // Custom Description Field
    woocommerce_wp_textarea_input(
        array(
            'id' => '_product_description',
            'label' => __('Custom Description', 'your-domain'),
            'placeholder' => __('Enter custom description', 'your-domain'),
            'value' => get_post_meta($post->ID, '_product_description', true),
        )
    );

    echo '</div>';
}
add_action('woocommerce_product_options_general_product_data', 'custom_product_description');

// Save custom description field data
function custom_save_product_description($post_id) {
    // Save Custom Description
    $product_description = isset($_POST['_product_description']) ? sanitize_textarea_field($_POST['_product_description']) : '';
    update_post_meta($post_id, '_product_description', $product_description);
}
add_action('woocommerce_process_product_meta', 'custom_save_product_description');





// Add additional information fields to the product section
function custom_product_additional_information() {
    global $woocommerce, $post;

    echo '<div class="options_group">';

    echo '<h2>' . __('ADDITIONAL INFORMATION', 'your-domain') . '</h2>';

    // Product Brand
    woocommerce_wp_text_input(
        array(
            'id' => '_product_brand',
            'label' => __('Brand', 'your-domain'),
            'placeholder' => __('Enter brand', 'your-domain'),
            'value' => get_post_meta($post->ID, '_product_brand', true),
        )
    );

    // Product Manufacturer
    woocommerce_wp_text_input(
        array(
            'id' => '_product_manufacturer',
            'label' => __('Manufacturer', 'your-domain'),
            'placeholder' => __('Enter manufacturer', 'your-domain'),
            'value' => get_post_meta($post->ID, '_product_manufacturer', true),
        )
    );

    // Product Colors
    woocommerce_wp_text_input(
        array(
            'id' => '_product_colors',
            'label' => __('Colors', 'your-domain'),
            'placeholder' => __('Enter colors', 'your-domain'),
            'value' => get_post_meta($post->ID, '_product_colors', true),
        )
    );

    // Other Additional Information
    woocommerce_wp_textarea_input(
        array(
            'id' => '_product_additional_info',
            'label' => __('Other Additional Information', 'your-domain'),
            'placeholder' => __('Enter additional information', 'your-domain'),
            'value' => get_post_meta($post->ID, '_product_additional_info', true),
        )
    );

    echo '</div>';
}
add_action('woocommerce_product_options_general_product_data', 'custom_product_additional_information');

// Save additional information fields data
function custom_save_product_additional_information($post_id) {
    // Save Product Brand
    $product_brand = isset($_POST['_product_brand']) ? sanitize_text_field($_POST['_product_brand']) : '';
    update_post_meta($post_id, '_product_brand', $product_brand);

    // Save Product Manufacturer
    $product_manufacturer = isset($_POST['_product_manufacturer']) ? sanitize_text_field($_POST['_product_manufacturer']) : '';
    update_post_meta($post_id, '_product_manufacturer', $product_manufacturer);

    // Save Product Colors
    $product_colors = isset($_POST['_product_colors']) ? sanitize_text_field($_POST['_product_colors']) : '';
    update_post_meta($post_id, '_product_colors', $product_colors);

    // Save Other Additional Information
    $product_additional_info = isset($_POST['_product_additional_info']) ? sanitize_textarea_field($_POST['_product_additional_info']) : '';
    update_post_meta($post_id, '_product_additional_info', $product_additional_info);
}
add_action('woocommerce_process_product_meta', 'custom_save_product_additional_information');




// Add to Cart button URL
function custom_add_to_cart_url($url, $product) {
    global $woocommerce;
    $url = $woocommerce->cart->get_cart_url() . '?add-to-cart=' . $product->get_id();
    return $url;
}
add_filter('woocommerce_product_add_to_cart_url', 'custom_add_to_cart_url', 10, 2);



// Add custom tax to product
function custom_woocommerce_product_tax($price, $product) {
    $tax_rate = 0.10; // Custom tax rate (10%)
    $tax_amount = $price * $tax_rate;
    $price += $tax_amount;
    return $price;
}
add_filter('woocommerce_product_get_price', 'custom_woocommerce_product_tax', 10, 2);
add_filter('woocommerce_product_get_regular_price', 'custom_woocommerce_product_tax', 10, 2);

// Add custom shipping cost to product
function custom_woocommerce_product_shipping_cost($cost, $package, $shipping_method, $instance) {
    $additional_cost = 5.00; // Custom additional shipping cost
    $cost += $additional_cost;
    return $cost;
}
add_filter('woocommerce_package_rates', 'custom_woocommerce_product_shipping_cost', 10, 4);




// Register a new user on WooCommerce account creation
function custom_wc_create_account( $user_id ) {
    $user = get_userdata( $user_id );

    // Update user details in 'wp_users' table
    $user_data = array(
        'user_email' => $user->user_email,
        'user_login' => $user->user_login,
        'user_pass'  => $user->user_pass,
        'user_nicename' => $user->user_nicename,
        'user_url'   => $user->user_url,
        'display_name'  => $user->display_name,
        'nickname'  => $user->nickname,
        'first_name'  => $user->first_name,
        'last_name' => $user->last_name,
        'description' => $user->description,
        'user_registered' => $user->user_registered,
        'role' => $user->roles[0],
    );

    // Insert or update user data in 'wp_users' table
    $user_id = wp_insert_user( $user_data );

    if ( is_wp_error( $user_id ) ) {
        // Handle the error here if needed
    } else {
        // Additional actions or hooks after account creation
        // For example, send a welcome email, update custom user meta, etc.
    }
}
add_action( 'woocommerce_created_customer', 'custom_wc_create_account' );



// Function to display the language switcher
function custom_language_switcher() {
    if (function_exists('pll_the_languages')) {
        $languages = pll_the_languages(array('show_names' => 1, 'show_flags' => 0, 'raw' => 1));
        echo '<select class="custom-select" onchange="if (this.value) window.location.href=this.value;">';
        foreach ($languages as $language) {
            $selected = $language['current_lang'] ? 'selected' : '';
            echo '<option value="' . esc_attr($language['url']) . '" ' . $selected . '>' . esc_html($language['name']) . '</option>';
        }
        echo '</select>';
    }
}

// Hook the function to a custom action hook
add_action('my_header', 'custom_language_switcher');
