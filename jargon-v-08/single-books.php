

<?php
    get_header(); //This is our main header with navigation
   // get_template_part(      ,     ); //you can use this for a custom header and grab from the template parts or make your own below
    //print_r(get_field('article_header')); //This will get the field and print the data in the browser

    $header = get_field('article_header'); //This gets the fields in the group, from there you can echo $header['field'] to get the individual fields
?>

<header class="article-header">
        <h1><?php echo $header['title'];?></h1>
        <p><?php echo $header['tagline'];?></p>
        <img src="<?php echo $header['header_image'];?>" alt="">
</header>

<?php 

    get_footer();

?>