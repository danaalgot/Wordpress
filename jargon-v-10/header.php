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
   
       <li class="jargon">
       <a class="home-link"  href="<?php bloginfo('url'); ?>">
        <!-- switch out the image url to your jargon or site logo -->
        <img class="mobile-menu-icon" src="https://dalgot.ca/dmit2032/labthree/wp-content/uploads/2019/10/logo-1.svg" alt="jargon company logo">
        argon
       </a>
       </li> 
        <!-- switch out the Pages Menu with your large viewport menu -->
        <!-- if you change the menu_class to something other than list-view -->
        <!-- then you will have to change the css in order to get this example to work. -->

       <li class="list-view-container">
            <?php wp_nav_menu(array('menu' => 'Pages Menu', 'menu_class'=> 'list-view',));?>
       </li>
             
         <!-- switch out the img src to the src of your mobile menu icon. -->
       <li id="mobile-menu-button" class="mobile-menu" >         
        <img class="mobile-menu-icon" src="https://dalgot.ca/dmit2032/labthree/wp-content/uploads/2019/10/bars.svg" alt="mobile menu icon"> 
       </li>

         <!-- switch out the href to the path to your sites login page. -->
        <li class="login">
        <a  class="login-button" href="http://jimf.dmitstudent.ca/dmit2032/section-one/wp-login">login</a>
       </li>
       
       </ul>
</nav>

    
<aside id="mobile-menu-items" class="mobile-menu-items hide-menu">
     <?php wp_nav_menu(array('menu'=>'Pages Menu')); ?>
</aside>
   

    
 