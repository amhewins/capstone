<?php
add_filter('show_admin_bar', '__return_false');
function my_assets() {
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array( 'style' ) );
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );

	wp_enqueue_style( 'grid-style', get_stylesheet_uri(), array( 'grid-styles' ) );
	wp_enqueue_style( 'grid-styles', get_stylesheet_directory_uri() . '/output.css' );

	wp_enqueue_style( 'screen-style', get_stylesheet_uri(), array( 'screen-styles' ) );
	wp_enqueue_style( 'screen-styles', get_stylesheet_directory_uri() . '/screen.css' );

	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/website-scripts.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_assets' );

add_action( 'wp_enqueue_scripts', 'add_my_script' );
function add_my_script() {
    wp_enqueue_script(
        'script', // name your script so that you can attach other scripts and de-register, etc.
        get_template_directory_uri() . '/js/script.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}

// include custom jQuery
function shapeSpace_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

function register_food_post_types() {
       $food_labels = array(
           "name" => __( 'Foods', '' ),
           "singular_name" => __( 'Food', '' ),
       );
       $food_cat_args = array(
           'label' => __('Categories', ''),
           'labels' => array(
               "name" => __( 'Categories', '' ),
               "singular_name" => __( 'Category', '' )
           )
       );
       $food = array(
           "label" => __( 'Food', '' ),
           "labels" => $food_labels,
           "description" => "",
           "public" => true,
           "publicly_queryable" => true,
           "show_ui" => true,
           "show_in_rest" => false,
           "rest_base" => "",
           "has_archive" => true,
           "show_in_menu" => true,
           "exclude_from_search" => false,
           "menu_icon" => 'dashicons-format-quote',
           "capability_type" => "post",
           "map_meta_cap" => true,
           "hierarchical" => false,
           "taxonomies" => array( "food_category" ),
           "rewrite" => array( "slug" => "food", "with_front" => true ),
           "query_var" => true,
           "supports" => array( "title", "editor", "excerpt", "thumbnail", "author", "page-attributes", "post-formats" ),
       );
       register_taxonomy( "food_category", "food", $food_cat_args );
       register_post_type( "food", $food );
   }
   add_action( 'init', 'register_food_post_types' );

	 function register_recipe_post_types() {
	        $recipe_labels = array(
	            "name" => __( 'Recipes', '' ),
	            "singular_name" => __( 'Recipe', '' ),
	        );
	        $recipe_cat_args = array(
	            'label' => __('Categories', ''),
	            'labels' => array(
	                "name" => __( 'Categories', '' ),
	                "singular_name" => __( 'Category', '' )
	            )
	        );
	        $recipe = array(
	            "label" => __( 'recipe', '' ),
	            "labels" => $recipe_labels,
	            "description" => "",
	            "public" => true,
	            "publicly_queryable" => true,
	            "show_ui" => true,
	            "show_in_rest" => false,
	            "rest_base" => "",
	            "has_archive" => true,
	            "show_in_menu" => true,
	            "exclude_from_search" => false,
	            "menu_icon" => 'dashicons-format-quote',
	            "capability_type" => "post",
	            "map_meta_cap" => true,
	            "hierarchical" => false,
	            "taxonomies" => array( "recipe_category" ),
	            "rewrite" => array( "slug" => "recipe", "with_front" => true ),
	            "query_var" => true,
	            "supports" => array( "title", "editor", "excerpt", "thumbnail", "author", "page-attributes", "post-formats" ),
	        );
	        register_taxonomy( "recipe_category", "recipe", $recipe_cat_args );
	        register_post_type( "recipe", $recipe );
	    }
	    add_action( 'init', 'register_recipe_post_types' );

			function register_my_menu() {
	  	register_nav_menu('header-menu',__( 'Header Menu' ));
			}
			add_action( 'init', 'register_my_menu' );
?>
