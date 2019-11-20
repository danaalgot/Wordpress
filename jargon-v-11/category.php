<?php  get_header();    ?>

<main>

<?php  
   if (have_posts()):  
      while (have_posts()):
         the_post();
?>

   <article>
      <header>
         <?php    the_title('<h2>', '</h2>');   ?>
         <p><?php    the_excerpt(  );   ?></p>
         <?php the_post_thumbnail( 'square'  ); ?>
      </header>
   </article

<?php  
   endwhile; 
    endif; 
?>

   </main>

<?php  get_footer(); ?>