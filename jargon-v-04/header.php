<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hermit Crab Care | Your guide on how to care for your hermit crabs</title>
    <?php wp_head();?>
</head>
<body>

<?php 
      if ( is_front_page()){
         get_template_part('template-parts/headers/landing' , 'page'); // the  ,  works the same as just putting front-page.php
      }

      if(is_single()){
         get_template_part('template-parts/headers/single' , 'post'); // the  ,  works the same as just putting front-page.php
      }
?>



    
 