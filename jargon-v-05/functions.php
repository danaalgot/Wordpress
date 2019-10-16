<?php 

   if(! function_exists('jargon_setup')){
       // wordpress functionality
       function jargon_setup(){
           add_theme_support('title_tag');
           add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
       }

   }

   add_theme_support("after_setup", "jargon_setup");
//    This disables the gutenburg editor - Some themes might not be compatible
   add_filter('use_block_editor_for_post', '__return_false', 10);



 
 
    function jargon_styles () {
        wp_enqueue_style('jargon_reboot', get_template_directory_uri(). '/assets/css/reboot.css');
        wp_enqueue_style('jargon_fonts', "https: //fonts.googleapis.com/css?family=Montserrat:400,700|PT+Sans:400,700|Roboto:400,700&display=swap");
        wp_enqueue_style('jargon_styles', get_stylesheet_uri());
    }

    
    add_action('wp_enqueue_scripts', 'jargon_styles');


//function creates a custom post type of movies
function create_post_type_movies()
{
    // creates label names for the post type in the dashboard the post panel and in the toolbar.
    $labels = array( //Lables are all the places the movie would be reverenced 
               'name' => __('Movies'),
               'singular_name' => __('Movie'),
               'add_new' => 'Add New Movie',
               'edit_item' => 'Create Movie'
    );
    // creates the post functionality that you want for a full listing see the link attached above
    $args = array(
        'labels' => $labels, //Lables are all the places the movie would be reverenced 
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'movies'),
         'menu_position' => 5, //position where this will show on the dashboard menu
         'menu_icon' => 'dashicons-video-alt2', //Icon that shows on the dashboard
         'supports'=> array('title', 'editor', 'custom-fields') // things we give to users to create the post
    );

   register_post_type('movies', $args  ); //this is the post type for the file - ours is single-movies.php - Creates custom posts
}
// Hooking up our function to theme setup
add_action('init', 'create_post_type_movies');
 

?>