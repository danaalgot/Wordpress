
<?php
/*

Template Name: Article
Template Post Type: article

*/

    get_header();

    $header = get_field('article_header'); 
    $body = get_field('article_content');
?>

<main class="site-main">
    <div class="article-header">
        <div class="article-header-content">
                <h2><?php echo $header['header_title'];?></h2>
                <p><?php echo $header['header_tagline'];?></p>
        </div>
        <img src="<?php echo $header['header_image'];?>" alt="">
    </div>

    <!-- Loop through the repearter field -->
<?php 
    if( have_rows ('article_section') ):
        while( have_rows ('article_section') ): the_row();
?>

<section class="article-body">
    <h3><span><?php   the_sub_field('section_title');   ?><span></h3>

    <div class="article-flex">
        <p><?php   the_sub_field('section_paragraph');   ?></p>
        <?php if  (   !get_sub_field('section_image')   ==  ""  ) {  ?>
        <img src="<?php    the_sub_field('section_image')   ?>" alt="">
    <?php } ?>
    </div>
    
</section>

<?php 
endwhile; 
endif; 
?>

</main>


<?php 

    get_footer();

?>