<?php
/**
 * Cyberhawk functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Cyberhawk
 */

if ( ! function_exists( 'cyberhawk_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cyberhawk_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Cyberhawk, use a find and replace
		 * to change 'cyberhawk' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cyberhawk', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'cyberhawk' ),
            'header' => esc_html__( 'Header Menu', 'cyberhawk' ),
            'footer' => esc_html__( 'Footer Menu', 'cyberhawk' ),
            'services-header' => esc_html__( 'Services Header Menu', 'cyberhawk' ),
            'sectors-header' => esc_html__( 'Sectors Header Menu', 'cyberhawk' ),
            'resources-header' => esc_html__( 'Knowledgebase Header Menu', 'cyberhawk' ),
            'company-header' => esc_html__( 'Company Header Menu', 'cyberhawk' ),
            'services-footer' => esc_html__( 'Services Footer Menu', 'cyberhawk' ),
            'sectors-footer' => esc_html__( 'Sectors Footer Menu', 'cyberhawk' ),
            'resources-footer' => esc_html__( 'Knowledgebase Footer Menu', 'cyberhawk' ),
            'company-footer' => esc_html__( 'Company Footer Menu', 'cyberhawk' ),
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
		add_theme_support( 'custom-background', apply_filters( 'cyberhawk_custom_background_args', array(
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
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

        /**
         * Add Search.
         *
         */
		add_theme_support('html5', array('search-form'));
	}
endif;
add_action( 'after_setup_theme', 'cyberhawk_setup' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cyberhawk_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'cyberhawk_content_width', 640 );
}
add_action( 'after_setup_theme', 'cyberhawk_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cyberhawk_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cyberhawk' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cyberhawk' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'cyberhawk_widgets_init' );

add_action( 'init', 'true_jquery_register' );

function true_jquery_register() {
    if ( !is_admin() ) {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', false, null, false );
        wp_enqueue_script( 'jquery' );
    }
}
/**
 * Enqueue scripts and styles.
 */
function cyberhawk_scripts() {
	wp_enqueue_style( 'cyberhawk-style', get_stylesheet_uri() );
    wp_enqueue_style( 'cyberhawk-style-css', get_template_directory_uri(). '/css/style.min.css' );
    wp_enqueue_style( 'slick-style-css', get_template_directory_uri(). '/css/slick/slick.css' );
    //wp_enqueue_script( 'cyberhawk-jquery', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'cyberhawk-slick-js', get_template_directory_uri() . '/js/slick.min.js', false, null, true );
//    wp_enqueue_script( 'cyberhawk-three-min-js', get_template_directory_uri() . '/js/three.min.js', false, null, true );
//    wp_enqueue_script( 'cyberhawk-tweenmax-min-js', get_template_directory_uri() . '/js/TweenMax.min.js', false, null, true );
    wp_enqueue_script( 'cyberhawk-main-min-js', get_template_directory_uri() . '/js/main.min.js', false, null, true );


//	wp_enqueue_script( 'cyberhawk-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
//
//	wp_enqueue_script( 'cyberhawk-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cyberhawk_scripts' );

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

/**
 * Menu li class
 */
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class_header)) {
        $classes[] = $args->add_li_class_header;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);



function custom_filter_wpcf7_is_tel( $result, $tel ) {
    $result = preg_match( '/^\(?\+?([0-9]{1,4})?\)?[-\. ]?(\d{10})$/', $tel );
    return $result;
}

add_filter( 'wpcf7_is_tel', 'custom_filter_wpcf7_is_tel', 10, 2 );



function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');




function searchfilter($query) {
    if ($query->is_search && !is_admin() ) {
        if(isset($_GET['post_type'])) {
            $type = $_GET['post_type'];
            if($type == 'news_and_blog') {
                $query->set('post_type',array('news_and_blog'));
            }
        }
    }
    return $query;
}
add_filter('pre_get_posts','searchfilter');




/*
 * Create Metaboxes
 *
 */

// ## Select Related Post Types Code Meta Box
add_action( 'add_meta_boxes', 'all_post_types_link' );
function all_post_types_link(){
    add_meta_box( 'all_post_types_links', 'Related Post Types', 'all_post_types_links_meta_box', 'page', 'normal', 'high' );
}
function all_post_types_links_meta_box($post){

    $post_types = get_post_types();
    ?>
    <table id="show">
        <tr>
            <td width="50%">
                <?php
                $defaults_types = ["post", "page", "attachment", "revision", "nav_menu_item", "custom_css", "customize_changeset", "oembed_cache", "user_request", "wp_block", "acf-field", "wpcf7_contact_form"];

                foreach( $post_types as $post_type ) {
                    $selected = get_post_meta($post->ID, 'selected', false);
                    $pt = get_post_type_object($post_type);
                    if(empty(!$selected) ){
                        foreach ($selected as $selected_arr){
                            foreach ($selected_arr as $select){
                                if($select == $post_type){ ?>
                                    <a class="button button-primary button-large" style="margin: 5px 0" href="<?php echo site_url()."/wp-admin/edit.php?post_type=".$post_type;?>"><?php echo $pt->labels->name; ?></a>
                                <?php }
                            }
                        }
                    } else {
                        if (!in_array($post_type, $defaults_types)) {
                            ?>
                            <a class="button button-primary button-large" style="margin: 5px 0"
                               href="<?php echo site_url() . "/wp-admin/edit.php?post_type=" . $post_type; ?>"><?php echo $pt->labels->name; ?></a>
                        <?php }
                    }

                }
                ?>
            </td>
        </tr>
    </table>
    <script>
        jQuery(document).ready(function($){ /* PREPARE THE SCRIPT */
            $("#all_post_types").change(function(){
                ajax_data();
            });
            function ajax_data(){
                var posts = [];
                $('#all_post_types option:selected').each(function() {
                    posts.push($(this).val());
                });

                var dataString={
                    'filter': 1,
                    'search_input':posts
                }
                $.ajax({ /* THEN THE AJAX CALL */
                    type: "POST", /* TYPE OF METHOD TO USE TO PASS THE DATA */
                    url: "/wp-content/themes/cyberhawk/fetch_data_post_types.php", /* PAGE WHERE WE WILL PASS THE DATA */
                    data: dataString, /* THE DATA WE WILL BE PASSING */
                    success: function(result){ /* GET THE TO BE RETURNED DATA */
                        $("#show").html(result); /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
                    }
                });


            }

        });
    </script>

    <?php
}


// ## Output Buttons with Related Post Types Code
add_action( 'add_meta_boxes', 'all_post_types' );
function all_post_types(){
    add_meta_box( 'all_post_types', 'Select Related Post Types', 'all_post_types_meta_box', 'page', 'normal', 'high' );
}
function all_post_types_meta_box($post){

    $post_types = get_post_types();
    ?>
    <table width="100%">
        <tr>
            <td width="10%"> <label for="coupon_code">Post Types: </label></td>
            <td width="40%" >

                <select id="all_post_types" name="all_post_types[]" style="   height: 300px;width: 90%;" multiple >
                    <?php

                    function get_selected_meta( $post_type, $selected_arr){
                        foreach ($selected_arr as $selected){
                            foreach ($selected as $select){
                                if($select == $post_type){
                                    echo "selected";
                                } else {
                                    echo "";
                                }
                            }
                        }

}

                    foreach ($post_types as $post_type){
                        $defaults_types = ["post", "page", "attachment", "revision", "nav_menu_item", "custom_css", "customize_changeset", "oembed_cache", "user_request", "wp_block", "acf-field", "wpcf7_contact_form"];
                        $selected = get_post_meta($post->ID, 'selected', false);
                        if(!in_array($post_type, $defaults_types)){
                            ?>
                            <option <?php get_selected_meta( $post_type, $selected); ?> value="<?php echo $post_type ?>"><?php echo $post_type ?></option>
                        <?php }
                    }
                    ?>
                </select>
            </td>

        </tr>
    </table>

    <?php
}


/* Save Metaboxes */
add_action('save_post', function ($post_id) {
    if (isset($_POST['all_post_types'])){
        update_post_meta($post_id, 'selected', $_POST['all_post_types']);
    }
});

/* Change term to checkbox taxonomy */
add_action( 'init', 'ccchange_tterm_tto_checkboxxx', 999);
function ccchange_tterm_tto_checkboxxx()
{
    $tax = get_taxonomy('post_tag');
    $tax->meta_box_cb = 'post_categories_meta_box';
    $tax->hierarchical = true;
}

function webp_upload_mimes( $existing_mimes ) {
    // add webp to the list of mime types
    $existing_mimes['webp'] = 'image/webp';
    // return the array back to the function with our added mime type
    return $existing_mimes;
}
add_filter( 'mime_types', 'webp_upload_mimes' );