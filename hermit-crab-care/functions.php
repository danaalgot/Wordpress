<?php

if (!function_exists('site_setup')) {
    // wordpress functionality
    function site_setup(){
        add_theme_support('title_tag');
    }
}

add_theme_support("after_setup", "site_setup");
add_filter('use_block_editor_for_post', '__return_false', 10);

function hermitcrab_styles(){
    wp_enqueue_style('site_reboot', get_template_directory_uri() . '/assets/css/reboot.css');
    wp_enqueue_style('site_fonts', "https://fonts.googleapis.com/css?family=Bad+Script|Kalam|Raleway:400,300i&display=swap");
    wp_enqueue_style('site_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'hermitcrab_styles');


//function creates a custom post type of movies
function create_post_type_movies(){
    // creates label names for the post type in the dashboard the post panel and in the toolbar.

}
// Change default "Enter Title Here" text 
// for admin area based on CPT
add_action('admin_head', 'hide_wp_title_input');
function hide_wp_title_input(){
    $screen = get_current_screen();
    if ($screen->id != 'food') {
        return;
    }
    ?>

    <style type="text/css">
      #post-body-content {
        display: none;
      }
    </style>

  <?php
}

// you'll want to rename your  function
// XXX => name of your post type
function save_post_type_post($post_id) {
    $post_type = get_post_type($post_id);
    if ($post_type != 'article') { //this is the name of the custom post type
        return;
    }

    // add the name of the filed that contains the 
    // title YYYYYY = name of the group that contains the
    // title
    $header = get_field('article_header');  //this is the field group name we made 
    //ZZZZ ===> name of field for the title
    $post_title = $header['header_title']; //whatever you named the title field, this will show the title as the book title on posts
    $post_name = sanitize_title($post_title);
    $post = array(
        'ID' => $post_id,
        'post_name' => $post_name,
        'post_title' => $post_title
    );
    wp_update_post($post);
}

add_action('acf/save_post', 'save_post_type_post'); 


?>
