

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

<main>

<!-- Loop through the repearter field -->
<?php 
    if( have_rows ('section') ):
        while( have_rows ('section') ): the_row();
?>

<div class="repeater">
        <p><?php   the_sub_field('text');   ?></p>

        <?php if(the_sub_field('support_image') !== " "){  ?>
            <img src="<?php get_sub_field('support_image'); ?>" alt="">
         <?php    }  ?>
             
</div>

<?php 
endwhile; 
endif; 
?>


</main>

<?php 

    get_footer();

?>