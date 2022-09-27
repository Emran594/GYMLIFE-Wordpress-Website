<?php
require_once get_theme_file_path("inc/tgm.php");
require_once get_theme_file_path("inc/customizer.php");

if ( ! function_exists( 'gymlife_setup' ) ) :
	function gymlife_setup() {
		load_theme_textdomain( 'gymlife', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'gymlife' ),
				'footer-left'=> __('Footer Left Menu','gymlife'),
				'footer-right'=> __('Footer right Menu','gymlife')
			)
		);
		add_image_size( 'sidebar', 80, 80, true );
		
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);
		add_theme_support(
			'custom-background',
			apply_filters(
				'gymlife_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);
		add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'gymlife_setup' );

function gymlife_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gymlife_content_width', 640 );
}
add_action( 'after_setup_theme', 'gymlife_content_width', 0 );

function gymlife_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Right Sidebar', 'gymlife' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'gymlife' ),
			'before_widget' => '<div id="%1$s" class="fs-about">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Header Right Sidebar', 'gymlife' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'gymlife' ),
			'before_widget' => '<div id="%1$s" class="to-social">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Main Footer', 'gymlife' ),
			'id'            => 'sidebar-3',
			'description'   => esc_html__( 'Add widgets here.', 'gymlife' ),
			'before_widget' => '<div id="%1$s" class="copyright-text">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Sponsor', 'gymlife' ),
			'id'            => 'sidebar-4',
			'description'   => esc_html__( 'This Image Will Show as your sponsor Or Promotion Banner', 'gymlife' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		)
	);
	
    register_sidebar( array(
        'name'          => __( 'Social Share Widget', 'gymlife' ),
        'id'            => 'social_share',
        'description'   => __( 'this will show social share widget', 'gymlife' ),
        'before_widget' => '<div class="bp-social">',
        'after_widget'  => '</div>',
        'before_title'  => '<span>',
        'after_title'   => '</span>',
    ) );
}
add_action( 'widgets_init', 'gymlife_widgets_init' );

function gymlife_scripts() {
	wp_enqueue_style('google-fonts1','//fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap');
    wp_enqueue_style('google-fonts2','//fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap');
    wp_enqueue_style("bootstrap-css",get_theme_file_uri('/assets/css/bootstrap.min.css'),null,'1.0');
    wp_enqueue_style("fontawesome-css",get_theme_file_uri('/assets/css/font-awesome.min.css'),null,'1.0');
    wp_enqueue_style("flaticon-css",get_theme_file_uri('/assets/css/flaticon.css'),null,'1.0');
    wp_enqueue_style("owl-carousel-css",get_theme_file_uri('/assets/css/owl.carousel.min.css'),null,'1.0');
    wp_enqueue_style("barfiller-css",get_theme_file_uri('/assets/css/barfiller.css'),null,'1.0');
    wp_enqueue_style("magnific-popup-css",get_theme_file_uri('/assets/css/magnific-popup.css'),null,'1.0');
    wp_enqueue_style("slicknav-css",get_theme_file_uri('/assets/css/slicknav.min.css'),null,'1.0');
    wp_enqueue_style("main-css",get_theme_file_uri('/assets/css/style.css'),null,'1.0');
	wp_enqueue_style( "gymlife-css", get_stylesheet_uri(  ) );
    
    wp_enqueue_script( "bootstrap-js", get_theme_file_uri( "/assets/js/bootstrap.min.js" ), array('jquery'), '1.0',true);
    wp_enqueue_script( "magnific-js", get_theme_file_uri( "/assets/js/jquery.magnific-popup.min.js" ), array('jquery'), '1.0',true);
    wp_enqueue_script( "masonry-js", get_theme_file_uri( "/assets/js/masonry.pkgd.min.js" ), array('jquery'), '1.0',true);
    wp_enqueue_script( "barfiller-js", get_theme_file_uri( "/assets/js/jquery.barfiller.js" ), array('jquery'), '1.0',true);
    wp_enqueue_script( "slicknav-js", get_theme_file_uri( "/assets/js/jquery.slicknav.js" ), array('jquery'), '1.0',true);
    wp_enqueue_script( "owl-carousel-js", get_theme_file_uri( "/assets/js/owl.carousel.min.js" ), array('jquery'), '1.0',true);
    wp_enqueue_script( "main-js", get_theme_file_uri( "/assets/js/main.js" ), array('jquery'), '1.0',true);
    

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gymlife_scripts' );

function gymlife_search_form($form){
	$newform = <<<FORM
	<i class="fa fa-search"></i>
FORM;
	return $newform;
}
add_filter( 'get_search_form', 'gymlife_search_form' );

function cat_count_span($links) {
  $links = str_replace('</a> (', '</a> <span>(', $links);
  $links = str_replace(')', ')</span>', $links);
  return $links;
}
add_filter('wp_list_categories', 'cat_count_span');

$defaults = array(
	'child_of'            => 0,
	'current_category'    => 0,
	'depth'               => 0,
	'echo'                => 1,
	'exclude'             => '',
	'exclude_tree'        => '',
	'feed'                => '',
	'feed_image'          => '',
	'feed_type'           => '',
	'hide_empty'          => 1,
	'hide_title_if_empty' => false,
	'hierarchical'        => true,
	'order'               => 'ASC',
	'orderby'             => 'name',
	'separator'           => '<br />',
	'show_count'          => 0,
	'show_option_all'     => '',
	'show_option_none'    => __( 'No categories' ),
	'style'               => 'list',
	'taxonomy'            => 'category',
	'title_li'            => __( 'Categories' ),
	'use_desc_for_title'  => 1,
);


function gymlife_comment_fields( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
	
	unset( $fields['cookies'] );
	return $fields;
}	 
add_filter( 'comment_form_fields', 'gymlife_comment_fields' );

add_filter( 'comment_form_default_fields', 'cookie_remove' );
function cookie_remove( $fields ) {
	unset( $fields['cookies'] );
	return $fields;
}