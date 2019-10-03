<!-- Directions to wordpress -->



<?php

        if (  ! function_exists('setup_jargon')  ) {
            //  add theme support form wordpress

            add_theme_support('title-tag');

        }

        add_theme_support('after_setup_theme',      'setup_jargon');


        function jargon_styles(){                                                                                           //appending the style sheet
            wp_enqueue_style(  ' jargon_reboot ',    get_template_directory(). '/assets/css/reboot.css'  );
            wp_enqueue_style(   ' jargon_fonts', 'https://fonts.googleapis.com/css?family=Raleway&display=swap'   );
            wp_enqueue_style(   ' jargon_styles ',      get_stylesheet_uri()   ); //linking to the style sheet
        }

        add_action(   'wp_enqueue_scripts',     'jargon_styles'  );

        //echo get_stylesheet_uri(); //gets the url to the style sheet

        //echo get_template_directory_uri(); //url, including the domain name

       // echo get_template_directory(); //computer path, this is how you would start pathing to files


?>