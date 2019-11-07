<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head();?>
</head>


<body <?php body_class(); ?>>

<nav class="site-nav">
       <ul class="icon-view">
       <li>
       <a class="home-link"  href="<?php bloginfo('url'); ?>">
        <img class="mobile-menu-icon" src="http://jimf.dmitstudent.ca/dmit2032/section-one/wp-content/uploads/2019/10/logo-3.svg" alt="jargon company logo">
        argon
       </a>
       </li> 
             
            <?php 
                $default = array(  'theme_location' => 'jargon-site' ); //This is how you pick what menu you want to show
                wp_nav_menu( $default );
            ?>
  
       <li >
        <a class="login-button" href="http://jimf.dmitstudent.ca/dmit2032/section-one/wp-login">login</a>
       </li>
       
       </ul>
</nav>



   

    
 